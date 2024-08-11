@extends('layouts.shop.shop')
@section('content')
<section class="relative lg:py-24 py-16 bg-slate-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="md:flex justify-center mt-24">
            <div class="lg:w-4/5 w-full">
                <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                    <div class="border-b border-gray-100 dark:border-gray-700 pb-6">
                        <div class="md:flex justify-between">
                            <div>
                                <img src="/images/MuriloBoutique.png" class="block dark:hidden" alt="logo" width="50%">
                                <img src="/images/MuriloBoutiqueLight.png" class="hidden dark:block" alt="logo" width="50%">
                                <div class="flex mt-4">
                                    <i data-feather="link" class="h-4 w-4 me-3 mt-1"></i>
                                    <a href="{{route('product')}}" class="text-orange-500 dark:text-white font-medium">www.muriloboutique.com</a>
                                </div>
                            </div>

                            <div class="mt-6 md:mt-0 md:w-56">
                                <h5 class="text-lg font-semibold">Adresse:</h5>

                                <ul class="list-none">
                                    <li class="flex mt-3">
                                        <i data-feather="map-pin" class="h-4 w-4 me-3 mt-1"></i>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" data-type="iframe" class="lightbox text-slate-400">1419 Riverwood Drive, <br> Redding, CA 96001</a>
                                    </li>
                                    
                                    <li class="flex mt-3">
                                        <i data-feather="mail" class="h-4 w-4 me-3 mt-1"></i>
                                        <a href="mailto:contact@example.com" class="text-slate-400">info@cartzio.com</a>
                                    </li>
                                    
                                    <li class="flex mt-3">
                                        <i data-feather="phone" class="h-4 w-4 me-3 mt-1"></i>
                                        <a href="tel:+152534-468-854" class="text-slate-400">(+12) 1546-456-856</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="md:flex justify-between">
                        <div class="mt-6">
                            <h5 class="text-lg font-semibold">Details de la commande :</h5>

                            <ul class="list-none">
                                <li class="flex mt-3">
                                    <span class="w-24">Numéro :</span>
                                    <span class="text-slate-400">{{$commande->numero}}</span>
                                </li>
                                
                                <li class="flex mt-3">
                                    <span class="w-24">Nom :</span>
                                    <span class="text-slate-400">{{$commande->user->name}} {{$commande->user->nom}}</span>
                                </li>
                                
                                <li class="flex mt-3">
                                    <span class="w-24">Adresse :</span>
                                    <span class="text-slate-400">{{$commande->address}} <br> {{$commande->cp}}, {{$commande->state}}</span>
                                </li>
                                
                                <li class="flex mt-3">
                                    <span class="w-24">Téléphone :</span>
                                    <span class="text-slate-400">{{$commande->user->phone}}</span>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-3 md:w-56">
                            <ul class="list-none">
                                <li class="flex mt-3">
                                    <span class="w-24">Date :</span>
                                    <span class="text-slate-400">{{$commande->created_at->format('d M Y')}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md mt-6">
                        <table class="w-full text-start text-slate-500 dark:text-slate-400">
                            <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                                <tr>
                                    <th scope="col" class="text-center px-6 py-3 w-16">
                                        No.
                                    </th>
                                    <th scope="col" class="text-start px-6 py-3">
                                        Article
                                    </th>
                                    <th scope="col" class="text-center px-6 py-3 w-20">
                                        Qte
                                    </th>
                                    <th scope="col" class="text-center px-6 py-3 w-28">
                                        Prix Unitaire(€)
                                    </th>
                                    <th scope="col" class="text-end px-6 py-3 w-20">
                                        Total($)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num=1;
                                    $total=0;
                                    @endphp
                                @foreach ($commande->commandeItems as $rowCommande)
                                <tr class="bg-white dark:bg-slate-900">
                                    <td class="text-center px-6 py-4">
                                        {{$num}}
                                    </td>
                                    <th scope="row" class="text-start px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$rowCommande->product->name}}
                                    </th>
                                    <td class="text-center px-6 py-4">
                                        {{$rowCommande->quantite}}
                                    </td>
                                    <td class="text-center px-6 py-4">
                                        {{$rowCommande->product->price}}
                                    </td>
                                    <td class="text-end px-6 py-4">
                                        €{{round($rowCommande->product->price*$rowCommande->quantite,2)}}
                                        
                                    </td>
                                </tr>
                                @php
                                    $num+=1;
                                    $total+=$rowCommande->product->price*$rowCommande->quantite;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="w-56 ms-auto p-5">
                        <ul class="list-none">
                            <li class="text-slate-400 flex justify-between">
                                <span>Sous-total :</span>
                                <span>€ {{round($total,2)}}</span>
                            </li>
                            <li class="text-slate-400 flex justify-between mt-2">
                                <span>Taxes :</span>
                                <span>€ {{round($total*0.085,2)}}</span>
                            </li>
                            <li class="flex justify-between font-semibold mt-2">
                                <span>Total :</span>
                                <span>€ {{round($total+($total*0.085),2)}}</span>
                            </li>
                        </ul>
                    </div>

                    <div class="invoice-footer border-t border-gray-100 dark:border-gray-700 pt-6">
                        <div class="md:flex justify-between">
                            <div>
                                <div class="text-slate-400 text-center md:text-start">
                                    <h6 class="mb-0">Customer Services : <a href="tel:+152534-468-854" class="text-amber-500">(+12) 1546-456-856</a></h6>
                                </div>
                            </div>

                            <div class="mt-4 md:mt-0">
                                <div class="text-slate-400 text-center md:text-end">
                                    <h6 class="mb-0"><a href="page-terms.html" target="_blank" class="text-orange-500">Terms & Conditions</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
@endsection