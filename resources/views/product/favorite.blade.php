@extends('layouts.shop.shop')
@section('content')

    <!-- Start Hero -->
    <section class="relative table w-full py-20 lg:py-24 md:pt-28 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1 mt-14">
                <h3 class="text-3xl leading-normal font-semibold">Favoris</h3>
            </div><!--end grid-->

            <div class="relative mt-3">
                <ul class="tracking-[0.5px] mb-0 flex items-center">
                    <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500"><a href="{{route('product')}}">Accueil</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i data-feather="chevron-right"></i></li>
                    <li class="inline-block uppercase text-[13px] font-bold text-orange-500" aria-current="page">Favoris</li>
                </ul>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                @forelse ($favorites as $favorite)
                    <div class="group relative duration-500 w-full mx-auto">
                        <div class="md:flex items-center">
                            <div class="relative overflow-hidden md:shrink-0 shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                                <img class="h-full w-full object-cover md:w-48 rounded-md group-hover:scale-110 duration-500" src="/images/storage/{{$favorite->product->images}}" alt="">
                                <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                    <li class="mt-1"><a href="{{route('product.detail',$favorite->product)}}" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                </ul>

                                <ul class="list-none absolute top-[10px] start-4">
                                    <li><a href="javascript:void(0)" class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">-40% Off</a></li>
                                </ul>
                            </div>
                            <div class="md:ms-6 md:mt-0 mt-4">
                                <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">{{$favorite->product->name}}</a>
                                <p class="text-slate-400 md:block hidden mt-2">{{$favorite->product->description}}</p>
                                <p class="mt-2">€ {{$favorite->product->price}}</p>

                                <div class="mt-4">
                                    <a href="{{route('panier.ajouter',$favorite->product)}}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white rounded-md">Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->                    
                @empty
                    <h2 class="w-full text-center">Vous n'avez pas encore d'articles dans vos favoris ! <br> N'ésitez pas à consulter nos sélections !!</h2>
                @endforelse
            </div><!--end grid-->

            {{-- <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
                <div class="md:col-span-12 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">
                                    <i data-feather="chevron-left" class="size-5 rtl:rotate-180 rtl:-mt-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">1</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="z-10 size-[40px] inline-flex justify-center items-center text-white bg-orange-500 border border-orange-500">3</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">4</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">5</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">
                                    <i data-feather="chevron-right" class="size-5 rtl:rotate-180 rtl:-mt-1"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div><!--end col-->
            </div><!--end grid--> --}}
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->


    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="w-full text-center font-bold text-5xl">Favoris</h1>
                    <br>
                    <hr>
                    <br>
                    <div class="bg-white">
                        <div class="mx-auto max-w-2xl px-4  lg:max-w-7xl lg:px-8">
                    
                            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    
                                @forelse ($favorites as $favorite)
                                    <a href="{{route('product.detail',$favorite->product)}}">
                                        <div class="group relative">
                                            <div class="relative aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                                <img src="/images/storage/{{$favorite->product->images}}" alt="img" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                            </div>
                                            <div class="mt-4 flex justify-between">
                                                <div>
                                                    <h3 class="text-sm text-gray-700">
                                                    {{$favorite->product->name}}
                                                    </h3>
                                                    <p class="mt-1 text-sm text-gray-500">{{$favorite->product->category->name}}</p>
                                                </div>
                                                <p class="text-sm font-medium text-gray-900">{{$favorite->product->price}}</p>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                
                                    Vous n'avez aucun produit en favoris
                                @endforelse
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> --}}
    
@endsection
