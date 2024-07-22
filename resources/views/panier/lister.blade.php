@extends('layouts.store')
@section('content')

<div class="bg-white">
  
    <main class="mx-auto max-w-2xl px-4 pb-24 pt-16 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Panier</h1>
  
      <form class="mt-12 lg:grid lg:grid-cols-12 lg:items-start lg:gap-x-12 xl:gap-x-16">
        <section aria-labelledby="cart-heading" class="lg:col-span-7">
          <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
  
          <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">

            @php
            @$ttc=0;
            @endphp
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
        {{-- *************************************** --}}

  
@endsection