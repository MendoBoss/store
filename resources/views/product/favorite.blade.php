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
                                    <h5 class="text-lg font-semibold my-6">Mes Favoris :</h5>
                                    <ul>
                                        @forelse ($favorites as $favorite)
                                            <li class="flex justify-between items-center pb-6">
                                                <div class="flex items-center">
                                                    <a href="{{route('product.detail',$favorite->product)}}"><img src="/images/storage/{{$favorite->product->images}}" class="rounded shadow dark:shadow-gray-800 w-16" alt=""></a>
                                                    

                                                    <div class="ms-4">
                                                        <a href="" class="font-semibold hover:text-orange-500">{{$favorite->product->name}}</a>
                                                        {{-- <p class=" text-sm mt-1">€ {{$favorite->product->description}}</p> --}}
                                                        <p class="text-green-600 text-sm mt-1">€ {{$favorite->product->price}} <del class="text-red-600">€ {{$favorite->product->price+($favorite->product->price*0.10)}}</del></p>
                                                    </div>
                                                </div>

                                                <div>
                                                    <a href="{{route('favorite.ajouter',$favorite->product)}}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-red-600/5 hover:bg-red-600 text-red-600 hover:text-white rounded-full"><i data-feather="trash-2" class="h-4 w-4"></i></a>
                                                </div>
                                            </li>
                                        @empty
                                            <li class="w-full text-center">Vous n'avez pas encore d'articles dans vos favoris ! <br> N'ésitez pas à consulter nos sélections !!</li>
                                        @endforelse
                                    </ul>
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
        
        <!-- Start -->
{{-- <section class="relative md:py-24 py-16">
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
                </div>                    
            @empty
                <h2 class="w-full text-center">Vous n'avez pas encore d'articles dans vos favoris ! <br> N'ésitez pas à consulter nos sélections !!</h2>
            @endforelse
        </div>

    </div>
</section> --}}




