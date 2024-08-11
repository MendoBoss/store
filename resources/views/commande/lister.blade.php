@extends('layouts.shop.shop')
@section('content')
    @auth
        <div class="w-full min-h-screen">
            <!-- Start Hero -->
            <section class="relative lg:pb-24 pb-16 md:mt-24 mt-20">
                <div class="md:container container-fluid relative">
                    <div class="relative overflow-hidden md:rounded-md shadow dark:shadow-gray-700 h-52 bg-[url('../../assets/images/hero/pages.jpg')] bg-center bg-no-repeat bg-cover"></div>
                </div><!--end container-->

                <div class="container relative md:mt-24 mt-16">
                    <div class="md:flex">
                        <x-account-sidebar/>
                        <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-6 md:mt-0">
                            {{-- <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900"> --}}
{{-- ****** --}}

                                <div class="rounded-md shadow dark:shadow-gray-800 p-6">
                                    <h5 class="text-lg font-semibold my-6">Mes Commandes :</h5>
                                    <div class="mx-auto max-w-2xl px-4  lg:max-w-7xl lg:px-8">
                                      {{-- <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2> --}}
            
                                      <table class="w-full divide-y divide-gray-300">
                                        <thead>
                                          <tr>
                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Numéro</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Total</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Dates</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                              <span class="sr-only">Edit</span>
                                            </th>
                                          </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            @forelse ($commandes as $commande)
                                                <tr>
                                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{$commande->numero}}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{round($commande->total,2)}}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$commande->created_at->format('d m Y')}}</td>
                                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                                    <a href="{{route('commande.details',$commande)}}" class="text-orange-500 hover:text-orange-600">Voir</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr><td collspan=4>Vous n'avez pas encore de commande validée !</td></tr>
                                            @endforelse
                              
                                          <!-- More people... -->
                                        </tbody>
                                      </table>
                                  
                                    </div>
            
                                </div>
{{-- ******* --}}
                            {{-- </div> --}}

                        </div>

                    </div><!--end grid-->
                </div><!--end container-->
                
            </section><!--end section-->
            <!-- End Hero -->
            
        </div>
        @endauth
        @endsection









    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="w-full text-center font-bold text-5xl">Mes commandes</h1>
                    <br>
                    <hr>
                    <br>
                    <div class="bg-white">
                        <div class="mx-auto max-w-2xl px-4  lg:max-w-7xl lg:px-8">

                          <table class="w-full divide-y divide-gray-300">
                            <thead>
                              <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Numéro</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Total</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Dates</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                  <span class="sr-only">Edit</span>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($commandes as $commande)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{$commande->numero}}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$commande->total}}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$commande->created_at->format('d m Y')}}</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td collspan=4>Vous n'avez pas encore de commande validée !</td></tr>
                                @endforelse
                  
                              <!-- More people... -->
                            </tbody>
                          </table>
                      
                        </div>
                    </div>
                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
