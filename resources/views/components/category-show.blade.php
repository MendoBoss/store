        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class=" my-6" style="height:40vh; background-image: url('/images/storage/{{$products[0]->category->image}}');background-position: center; background-repeat: no-repeat; background-size: cover;">
                <div class="container flex flex-col justify-center md:text-start text-center w-full" style="height:40vh;">
                    <h5 class=" w-full font-semibold text-6xl text-white leading-normal mb-4">{{$products[0]->category->name}}</h5>
                    {{-- <p class="text-slate-400 max-w-xl">Prenez le temps de parcourir notre sélection</p> --}}
                </div>

                {{-- <div class="md:text-end hidden md:block">
                    <a href="shop-grid.html" class="text-slate-400 hover:text-orange-500">See More Items <i class="mdi mdi-arrow-right"></i></a>
                </div> --}}
            </div><!--end grid-->
            <div class="container relative">
                
                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 pt-6 gap-6">
                    {{-- @dd($products) --}}
                    @foreach ($products as $product)    
                        <x-product-card :product="$product"/>                
                    @endforeach
                </div>
                <div class="w-2/4 mx-auto mt-8 py-5">
                    {{$products->onEachSide(5)->links() }}
                </div>
            </div>
        </section>
