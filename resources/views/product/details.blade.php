@extends('layouts.shop.shop')
@section('content')


                <!-- Start Hero -->
                <section class="relative table w-full py-20 lg:py-24 md:pt-28 bg-gray-50 dark:bg-slate-800">
                    <div class="container relative">
                        <div class="grid grid-cols-1 mt-14">
                            <h3 class="text-3xl leading-normal font-semibold">{{$product->name}}</h3>
                        </div><!--end grid-->
        
                        <div class="relative mt-3">
                            <ul class="tracking-[0.5px] mb-0 flex items-center">
                                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500"><a href="index.html">Accueil</a></li>
                                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i data-feather="chevron-right"></i></li>
                                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500"><a href="shop-grid.html">Boutique</a></li>
                                <li class="inline-block h-1 text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i data-feather="chevron-right"></i></li>
                                <li class="inline-block uppercase text-[13px] font-bold text-orange-500" aria-current="page">{{$product->name}}</li>
                            </ul>
                        </div>
                    </div><!--end container-->
                </section><!--end section-->
                <!-- End Hero -->
                         <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 items-center">
                    <div class="">
                        <ul class="product-imgs flex list-none items-center">
                            {{-- <li>
                                <ul class="img-select list-none">
                                    <li class="p-px">
                                        <a href="#" data-id="1">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/mens-jecket.jpg" class="shadow dark:shadow-gray-800" alt="">
                                        </a>
                                    </li>
                                    <li class="p-px">
                                        <a href="#" data-id="2">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/mens-jecket-3.jpg" class="shadow dark:shadow-gray-800" alt="">
                                        </a>
                                    </li>
                                    <li class="p-px">
                                        <a href="#" data-id="3">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/mens-jecket-left.jpg" class="shadow dark:shadow-gray-800" alt="">
                                        </a>
                                    </li>
                                    <li class="p-px">
                                        <a href="#" data-id="4">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/mens-jecket-back.jpg" class="shadow dark:shadow-gray-800" alt="">
                                        </a>
                                    </li>
                                    <li class="p-px">
                                        <a href="#" data-id="5">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/mens-jecket-4.jpg" class="shadow dark:shadow-gray-800" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}

                            <li class="img-display shadow dark:shadow-gray-800 m-px">
                                <div class="img-showcase flex w-full duration-500">
                                    <img src="/images/storage/{{$product->images}}" class="min-w-full" alt="shoe image">
                                    {{-- <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/mens-jecket-3.jpg" class="min-w-full" alt="shoe image"> --}}
                                    {{-- <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/mens-jecket-left.jpg" class="min-w-full" alt="shoe image"> --}}
                                    {{-- <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/mens-jecket-back.jpg" class="min-w-full" alt="shoe image"> --}}
                                    {{-- <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/mens-jecket-4.jpg" class="min-w-full" alt="shoe image"> --}}
                                </div>
                            </li>
                        </ul>
                    </div><!--end content-->
                    <div>
                        <form method="POST" action="{{route('commande.one')}}">
                            <h5 class="text-2xl font-semibold">{{$product->name}}</h5>
                            <div class="mt-2">
                                <span class="text-slate-400 font-semibold me-1">€ {{$product->price}} &nbsp; <del class="text-red-600">€ {{$product->price+($product->price*0.10)}}</del></span>
    
                                <ul class="list-none  text-orange-400 flex">
                                    <li class="inline"><i data-feather="star"></i></li>
                                    <li class="inline"><i data-feather="star"></i></li>
                                    <li class="inline"><i data-feather="star"></i></li>
                                    <li class="inline"><i data-feather="star"></i></li>
                                    <li class="inline"><i data-feather="star"></i></li>
                                    <li class="inline text-slate-400 font-semibold">4.8 (45)</li>
                                </ul>
                            </div>
    
                            <div class="mt-4">
                                <h5 class="text-lg font-semibold">Description :</h5>
                                <p class="text-slate-400 mt-2">{{$product->description}}</p>
                            
                            </div>
    
                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-4">
                                <div class="flex items-center">
                                    <h5 class="text-lg font-semibold me-2">Quantity:</h5>
                                    <div class="qty-icons ms-3 space-x-0.5">
                                        <div onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="moins" class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white minus">-</div>
                                        <input min="1" name="quantite" id="quantite" value="1" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                        <div onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="plus" class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white plus">+</div>
                                    </div>
                                </div><!--end content-->
                            </div><!--end grid-->
                            <div class="mt-4 space-x-1 w-full">
                            
                                    @csrf
                                    <input type="hidden" name="product" value="{{$product->id}}">
                                    <input type="submit" class="py-2 px-5 w-full inline-block font-semibold tracking-wide align-middle text-base text-center bg-orange-500 text-white rounded-md mt-2 hover:bg-orange-600 cursor-pointer" value="Acheter">
                                
                            </div>
                        </form><!--end content form-->
                        <form method="get" action="{{route('panier.ajouter',$product)}}" class="mt-4 space-x-1 w-full">
                            <input name="quantite2" id="quantite2"  value="1" type="hidden">

                            <button  class="py-2 px-5 w-full inline-block font-semibold tracking-wide align-middle text-base text-center rounded-md bg-orange-500/10 hover:bg-orange-500 text-orange-500 hover:text-white mt-2">Ajouter au panier</button>
                        </form>                        
                    </div>
                </div><!--end grid-->
                
                <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                    <div class="lg:col-span-3 md:col-span-5">
                        <div class="sticky top-20">
                            <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li role="presentation">
                                    <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full hover:text-orange-500 duration-500" id="description-tab" data-tabs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                                </li>
                                <li role="presentation">
                                    <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500" id="addinfo-tab" data-tabs-target="#addinfo" type="button" role="tab" aria-controls="addinfo" aria-selected="false">Caractéristiques </button>
                                </li>
                                <li role="presentation">
                                    <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500" id="review-tab" data-tabs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Avis</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="lg:col-span-9 md:col-span-7">
                        <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
                            <div class="" id="description" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="text-slate-400">{{$product->description}}</p>
                            </div>

                            <div class="hidden" id="addinfo" role="tabpanel" aria-labelledby="addinfo-tab">
                                <table class="w-full text-start">
                                    <tbody>
                                        <tr class="bg-white dark:bg-slate-900">
                                            <td class="font-semibold pb-4" style="width: 100px;">Color</td>
                                            <td class="text-slate-400 pb-4">Red, White, Black, Orange</td>
                                        </tr>

                                        <tr class="bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold py-4">Material</td>
                                            <td class="text-slate-400 py-4">Cotton</td>
                                        </tr>

                                        <tr class="bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold pt-4">Size</td>
                                            <td class="text-slate-400 pt-4">S, M, L, XL, XXL</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="hidden" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/client/01.jpg" class="h-11 w-11 rounded-full shadow" alt="">
        
                                            <div class="ms-3 flex-1">
                                                <a href="" class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin Carlo</a>
                                                <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                            </div>
                                        </div>
    
                                        <a href="" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                        <ul class="list-none inline-block text-orange-400">
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline text-slate-400 font-semibold">5.0</li>
                                        </ul>

                                        <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                    </div>
                                </div>
    
                                <div class="mt-8">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/client/02.jpg" class="h-11 w-11 rounded-full shadow" alt="">
        
                                            <div class="ms-3 flex-1">
                                                <a href="" class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin Carlo</a>
                                                <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                            </div>
                                        </div>
    
                                        <a href="" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                        <ul class="list-none inline-block text-orange-400">
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline text-slate-400 font-semibold">5.0</li>
                                        </ul>

                                        <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                    </div>
                                </div>
    
                                <div class="mt-8">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/client/03.jpg" class="h-11 w-11 rounded-full shadow" alt="">
        
                                            <div class="ms-3 flex-1">
                                                <a href="" class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin Carlo</a>
                                                <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                            </div>
                                        </div>
    
                                        <a href="" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                        <ul class="list-none inline-block text-orange-400">
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline text-slate-400 font-semibold">5.0</li>
                                        </ul>

                                        <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                    </div>
                                </div>
    
                                <div class="mt-8">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/client/04.jpg" class="h-11 w-11 rounded-full shadow" alt="">
        
                                            <div class="ms-3 flex-1">
                                                <a href="" class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin Carlo</a>
                                                <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                            </div>
                                        </div>
    
                                        <a href="" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                        <ul class="list-none inline-block text-orange-400">
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                            <li class="inline text-slate-400 font-semibold">5.0</li>
                                        </ul>

                                        <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                    </div>
                                </div>
    
                                <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                                    <h5 class="text-lg font-semibold">Leave A Comment:</h5>
        
                                    <form class="mt-8">
                                        <div class="grid lg:grid-cols-12 lg:gap-6">
                                            <div class="lg:col-span-6 mb-5">
                                                <div class="text-start">
                                                    <label for="name" class="font-semibold">Your Name:</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input name="name" id="name" type="text" class="ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Name :">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="lg:col-span-6 mb-5">
                                                <div class="text-start">
                                                    <label for="email" class="font-semibold">Your Email:</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input name="email" id="email" type="email" class="ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Email :">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="grid grid-cols-1">
                                            <div class="mb-5">
                                                <div class="text-start">
                                                    <label for="comments" class="font-semibold">Your Comment:</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="message-circle" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <textarea name="comments" id="comments" class="ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Message :"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md w-full">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container -->

            
            <div class="container lg:mt-24 mt-16">
                <div class="grid grid-cols-1 mb-6 text-center">
                    <h3 class="font-semibold text-3xl leading-normal">Produits similaires</h3>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 pt-6">
                    @foreach ($products as $product)    
                        <div class="group">
                            <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                                <img src="/images/storage/{{$product->images}}" class="group-hover:scale-110 duration-500" alt="">
        
                                <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                    <a href="{{route('panier.ajouter',$product)}}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Ajouter au panier</a>
                                </div>
        
                                <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                    <li><a href="{{route('favorite.ajouter',$product)}}" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                    <li class="mt-1"><a href="{{route('product.detail',$product)}}" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                    {{-- <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li> --}}
                                </ul>
                            </div>

                            <div class="mt-4">
                                <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">{{$product->name}}</a>
                                <div class="flex justify-between items-center mt-1">
                                    <p>€ {{$product->price}} <del class="text-slate-400"> € {{$product->price+($product->price*0.10)}}</del></p>
                                    {{-- <ul class="font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div><!--end content-->
                    @endforeach

                </div>
            </div>
        </section><!--end section-->
        <!-- End -->



        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-orange-500 text-white justify-center items-center"><i data-feather="arrow-up"></i></a>
        <!-- Back to top -->

        <script>
            // buttons
            var plus = document.getElementById("plus");
            var moins = document.getElementById("moins");
            // inputs
            var quantite = parseInt(document.getElementById("quantite").value);
            var quantite2 = parseInt(document.getElementById("quantite2").value);
            // var quantite2 = parseInt(document.getElementById("quantite2").value);
            var quantite3 = document.getElementById("quantite2");

            plus.addEventListener("click", (event)=>{
                quantite+=1;
                quantite3.setAttribute('value', quantite);
                // alert(quantite2);
            })
            moins.addEventListener("click", (event)=>{
                quantite-=1;
                quantite3.setAttribute('value', quantite);
                // alert(quantite2);
            })

        </script>
{{-- 
        <!-- JAVASCRIPTS -->
        <script src="https://shreethemes.in/cartzio/layouts/assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="https://shreethemes.in/cartzio/layouts/assets/libs/feather-icons/feather.min.js"></script>
        <script src="https://shreethemes.in/cartzio/layouts/assets/js/plugins.init.js"></script>
        <script src="https://shreethemes.in/cartzio/layouts/assets/js/app.js"></script>
        <!-- JAVASCRIPTS --> --}}
@endsection