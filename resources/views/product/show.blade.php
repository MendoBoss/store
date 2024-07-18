@extends('layouts.store')
@section('content')
<div class="flex">
  <div class="w-1/6">
      <x-sidebar :categories="$categories"/>
  </div>
  {{-- {{$product->isFavotites}} --}}
  {{-- @dd($product->favorites) --}}
  <div class="w-5/6">
        <div class="flex mx-auto w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-7xl ">
            <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:items-center lg:gap-x-8">
              <div class="relative aspect-h-3 aspect-w-2  rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                <span class="absolute -top-2 -right-3 px-2 py-1 rounded-lg bg-indigo-400 text-gray-50">{{$product->category->name}}</span>
                <img src="/images/storage/{{$product->images}}" width="100%" alt="Back of women&#039;s Basic Tee in black." class="object-cover object-center rounded-lg">
              </div>
              <div class="sm:col-span-8 lg:col-span-7">
                <h2 class="text-3xl font-medium text-gray-900 sm:pr-12">{{$product->name}}</h2>
                @if (isset($favorite))
                  <a href="{{route('favorite.ajouter',$product)}}" class="flex items-center gap-2 py-4 text-xs font-semibold">
                    <img src="/images/iconmonstr-heart-filled-48.png" alt="favorite" width="25px"><span> Retirer des favoris </span> 
                  </a>
                @else
                  <a href="{{route('favorite.ajouter',$product)}}" class="flex items-center gap-2 py-4 text-xs font-semibold">
                    <img src="/images/iconmonstr-heart-filled-48 (1).png" alt="favorite" width="25px"><span> Ajouter aux favoris </span> 
                  </a>
                @endif

                <section aria-labelledby="information-heading" class="mt-5">
                  <p class="font-medium text-gray-900">{{$product->price}} €</p>
                  <p class="font-medium text-sm text-gray-500 mt-5">{{$product->description}}</p>
                </section>

                <section aria-labelledby="options-heading" class="mt-11">
                  {{-- <form action="{{route('panier.ajouter',$product)}}" method="get"> --}}
                    <a href="{{route('panier.ajouter',$product)}}" class="mt-8 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Ajouter au panier</a>
                  {{-- </form> --}}
                  <div>
                    <h3 class="pl-8 pt-11 font-semibold">Produit similaires :</h3>
                      <x-product-card :products="$products"/>
                  </div>
              </section>
          </div>
        </div>
      </div>

  </div>

</div>

   
@endsection