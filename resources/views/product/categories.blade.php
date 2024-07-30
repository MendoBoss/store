@extends('layouts.shop.shop')
@section('content')
    {{-- <h1 class="text-3xl">index</h1> --}}
    {{-- <section class="relative md:flex table w-full items-center md:h-screen py-36  bg-center bg-no-repeat bg-cover" style="background-image: url('/images/StockCake-Fashion Show Elegance_1721961364.jpg')">
        <div class="absolute inset-0 bg-gradient-to-t to-transparent via-slate-900/50 from-slate-900/90"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 justify-center">
                <div class="text-center">
                    <span class="uppercase font-semibold text-lg text-white">Top Collection</span>
                    <h4 class="md:text-6xl text-4xl md:leading-normal leading-normal font-bold text-white my-3">Murilo Boutique</h4>
                    <p class="text-lg text-white/70">Notre site est un site virtuel qui ne vend pas réelement de produits !</p>

                    <div class="mt-6">
                        <a href="#articles" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-center bg-white text-orange-500 rounded-md hover:text-white hover:bg-orange-500  ">Voir les articles</a>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section--> --}}

    {{-- <x-categoryList /> --}}

    <x-category-show :products="$products"/>
    
        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-orange-500 text-white justify-center items-center"><i data-feather="arrow-up"></i></a>
        <!-- Back to top -->


@endsection