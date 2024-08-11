@extends('layouts.shop.shop')
@section('content')

    <!-- Start Hero -->
    <section class="relative table w-full py-20 lg:py-24 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1 mt-14">
                <h3 class="text-3xl leading-normal font-semibold">Panier</h3>
            </div><!--end grid-->

            <div class="relative mt-3">
                <ul class="tracking-[0.5px] mb-0  flex items-center">
                    <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500"><a href="{{route('product')}}">Accueil</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i data-feather="chevron-right"></i></li>
                    <li class="inline-block uppercase text-[13px] font-bold text-orange-500" aria-current="page">Panier</li>
                </ul>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid lg:grid-cols-1">
                <div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md">
                    <table class="w-full text-start">
                        <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th scope="col" class="p-4 w-4"></th>
                                <th scope="col" class="text-start p-4 min-w-[220px]">Produit</th>
                                <th scope="col" class="p-4 w-24 min-w-[100px]">Prix</th>
                                <th scope="col" class="p-4 w-56 min-w-[220px]">Qte</th>
                                <th scope="col" class="p-4 w-24 min-w-[100px]">Total(€)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total=0;
                            @endphp
                                                       
                            @forelse ($panier as $rowpanier)
                                <tr class="bg-white dark:bg-slate-900">
                                    <td class="p-4"><a href="{{route('panier.remove',$rowpanier)}}"><i data-feather="x-circle" class="text-orange-500"></i></a></td>
                                    <td class="p-4">
                                        <span class="flex items-center">
                                            <a href="{{route('product.detail',$rowpanier->product)}}"><img src="/images/storage/{{$rowpanier->product->images}}" class="rounded shadow dark:shadow-gray-800 w-12" alt=""></a>
                                            <span class="ms-3">
                                                <span class="block font-semibold">{{$rowpanier->product->name}}</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="p-4 text-center">€ {{$rowpanier->product->price}}</td>
                                    <td class="p-4 text-center">
                                        <div class="qty-icons">
                                            <a href="{{route('panier.moins',$rowpanier)}}" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white minus">-</a>
                                            <input min="0" name="quantity" value="{{$rowpanier->quantite}}" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                            <a href="{{route('panier.ajouter',$rowpanier->product)}}" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white plus">+</a>
                                        </div>
                                    </td>
                                    <td class="p-4  text-end">€ {{$rowpanier->quantite*$rowpanier->product->price}}</td>
                                </tr>
                                @php
                                    $total+=$rowpanier->quantite*$rowpanier->product->price;
                                @endphp
                            @empty
                                <tr class="bg-white dark:bg-slate-900">
                                    <td colspan="4"><h3>Votre panier est vide</h3></td>
                                    <td class="p-4  text-end">€ 0</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                    <div class="lg:col-span-9 md:order-1 order-3">
                        <div class="space-x-1">
                            <a href="{{route('commande.ajouter')}}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center bg-orange-500 text-white rounded-md mt-2">Commander</a>
                            {{-- <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white mt-2">Add to Cart</a> --}}
                        </div>
                    </div>

                    <div class="lg:col-span-3 md:order-2 order-1">
                        <ul class="list-none shadow dark:shadow-gray-800 rounded-md">
                            <li class="flex justify-between p-4">
                                <span class="font-semibold text-lg">Sous-total :</span>
                                <span class="text-slate-400">€ {{$total}}</span>
                            </li>
                            <li class="flex justify-between p-4 border-t border-gray-100 dark:border-gray-800">
                                <span class="font-semibold text-lg">TVA :</span>
                                <span class="text-slate-400">€ {{round($total*0.085,2)}}</span>
                            </li>
                            <li class="flex justify-between font-semibold p-4 border-t border-gray-200 dark:border-gray-600">
                                <span class="font-semibold text-lg">Total :</span>
                                <span class="font-semibold">€ {{round($total+=$total*0.085,2)}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end container-->

    </section><!--end section-->
    <!-- End -->

@endsection

<?php
    /*

        <div class="bg-white">
    
        <main class="mx-auto max-w-2xl px-4 pb-24 pt-16 sm:px-6 lg:max-w-7xl lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Panier</h1>
    
        <form class="mt-12 lg:grid lg:grid-cols-12 lg:items-start lg:gap-x-12 xl:gap-x-16">
            <section aria-labelledby="cart-heading" class="lg:col-span-7">
            <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
    
            <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">

               
                @$ttc=0;
               
                <div class="min-h-screen">
                <ul class="divide-y divide-gray-100 ">
                    @forelse ($panier as $rowpanier)
                        <li class="flex py-6 sm:py-10">
                            <div class="flex-shrink-0">
                                <a href="{{route('product.detail',$rowpanier->product->id)}}"><img src="/images/storage/{{$rowpanier->product->images}}" alt="img" class="h-24 w-24 rounded-md object-cover object-center sm:h-48 sm:w-48"></a>
                            </div>
                
                            <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                            <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                                <div>
                                    <div class="flex justify-between">
                                        <h3 class="text-sm">
                                        <a href="{{route('product.detail',$rowpanier->product->id)}}" class="font-medium text-gray-700 hover:text-gray-800">{{$rowpanier->product->name}}</a>
                                        </h3>
                                    </div>
                                    <p class="mt-1 text-sm font-medium text-gray-900">€ {{$rowpanier->product->price}}</p>
                                </div>
                
                                <div class="mt-4 sm:mt-0 sm:pr-9">
                                <label for="quantity-0" class="sr-only">Quantity, Basic Tee</label>
                                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                        <p class="text-sm leading-6 text-gray-500">Quantité : <br> <a href="{{route('panier.moins',$rowpanier)}}" class="px-2">-</a> {{$rowpanier->quantite}} <a href="{{route('panier.ajouter',$rowpanier->product)}}" class="px-2">+</a></p>
                                    </div>        
                                <div class="absolute right-0 top-0">
                                    <a href="{{route('panier.remove',$rowpanier)}}">
                                    <button type="button" class="-m-2 inline-flex p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Remove</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                    </svg>
                                    </button>
                                </a>
                                </div>
                                </div>
                            </div>
                
                            <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                <span>En stock</span>
                            </p>
                            </div>
                        </li>
                        @php
                            $ttc = $ttc + ($rowpanier->product->price*$rowpanier->quantite);
                        @endphp
                    @empty
                        <h2>Pas d'articles</h2>
                    @endforelse
                </ul>
            </section>
            
            <!-- Order summary -->
            <section aria-labelledby="summary-heading" class="mt-16 rounded-lg bg-gray-50 px-4 py-6 sm:p-6 lg:col-span-5 lg:mt-0 lg:p-8">
                <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Résumé de la commande</h2>
            
                <dl class="mt-6 space-y-4">
                <div class="flex items-center justify-between">
                    <dt class="text-sm text-gray-600">Sous-total</dt>
                    <dd class="text-sm font-medium text-gray-900">€ {{$ttc}}</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                    <dt class="flex items-center text-sm text-gray-600">
                    <span>Frais de port</span>
                    <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Learn more about how shipping is calculated</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    </dt>
                    <dd class="text-sm font-medium text-gray-900">€ 5.00</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                    <dt class="flex text-sm text-gray-600">
                    <span>TVA</span>
                    <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Learn more about how tax is calculated</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    </dt>
                    <dd class="text-sm font-medium text-gray-900">€ {{round(($ttc/100)*8.50,2)}}</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                    <dt class="text-base font-medium text-gray-900">Total à payer</dt>
                    <dd class="text-base font-medium text-gray-900">€ {{round($ttc+($ttc/100)*8.50,2)}}</dd>
                </div>
                </dl>
            
                <div class="mt-6 w-full text-end">
                    <a href="{{route('commande.ajouter')}}" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Payer  (  € {{round($ttc+($ttc/100)*8.50,2)}} )</a>
                {{-- <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Payer  (  € {{round($ttc+($ttc/100)*8.50,2)}} )</button> --}}
                </div>
            </section>
            </form>
            
            <!-- Related products -->
            <section aria-labelledby="related-heading" class="">
            <h2 id="related-heading" class="text-lg font-medium text-gray-900">You may also like&hellip;</h2>
            
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-related-product-01.jpg" alt="Front of Billfold Wallet in natural leather." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Billfold Wallet
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Natural</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$118</p>
                </div>
                </div>
            
                <!-- More products... -->
            </div>
            </section>
            </main>
            </div>
            </div>
            ***************************************
    */
?>
