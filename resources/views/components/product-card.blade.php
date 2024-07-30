{{-- 
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4  lg:max-w-7xl lg:px-8">

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
@forelse ($products as $product)

          <a href="{{route('product.detail',$product)}}">
            <div class="group relative">
            <div class="relative aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <div class="absolute top-1 right-1">
                  @if(isset(Auth()->user()->id))
                    @foreach (Auth()->user()->favorites as $userFavorite)
                      @if ($userFavorite->product_id==$product->id)
                        <div class="absolute top-0 right-0" style="width: 20px; height:20px; border-radius:100%; background:rgb(0, 0, 0); filter:blur(10px)"></div>
                        <img src="/images/iconmonstr-heart-filled-48.old.png" alt="favorite" width="15px" class="relative top-1 right-1 z-20">                    
                      @endif
                    @endforeach
                  @endif
                </div>
                <img src="/images/storage/{{$product->images}}" alt="img" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                <h3 class="text-sm text-gray-700">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                        {{$product->name}}
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">{{$product->category->name}}</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{$product->price}}</p>
              </div>
            </div>
          </a>
        
        @empty
        
        @endforelse
    </div>
  </div>
</div> --}}
  
<div class="group">
  <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
      <img src="/images/storage/{{$product->images}}" class="group-hover:scale-110 duration-500" alt="">

      <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
          <a href="{{route('panier.ajouter',$product)}}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Ajouter au panier</a>
      </div>

      <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">

        @php
          $isFavorite=false;
          if($favorites==[]){$isFavorite=false;}
        @endphp
        @auth
          @forelse ($favorites as $favorite)
              @if ($favorite->product_id==$product->id)
                @php
                  $isFavorite=true;
                @endphp
              @endif
              {{-- @break --}}
              @empty
              @php
                  $isFavorite=false;
                  @endphp
          @endforelse
        @endauth
    
        @if ($isFavorite==true)
          <li><a href="{{route('favorite.ajouter',$product)}}" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-orange-500 hover:bg-slate-900 hover:text-orange-500 shadow"><i data-feather="heart" class="size-4"></i></a></li>
          
        @else
          <li><a href="{{route('favorite.ajouter',$product)}}" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
          
        @endif   

          <li class="mt-1"><a href="{{route('product.detail',$product)}}" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
          {{-- <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li> --}}
      </ul>

      <ul class="list-none absolute top-[10px] start-4">
          <li><a href="javascript:void(0)" class="bg-red-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">Nouveau</a></li>
      </ul>
  </div>

  <div class="mt-4">
      <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">{{$product->name}}</a>
      <div class="flex justify-between items-center mt-1">
          <p>€  {{$product->price}} &nbsp; <del class="text-slate-400">€ {{$product->price+($product->price*0.10)}}</del></p>
          <ul class="font-medium text-amber-400 list-none">
              <li class="inline"><i class="mdi mdi-star"></i></li>
              <li class="inline"><i class="mdi mdi-star"></i></li>
              <li class="inline"><i class="mdi mdi-star"></i></li>
              <li class="inline"><i class="mdi mdi-star"></i></li>
              <li class="inline"><i class="mdi mdi-star"></i></li>
          </ul>
      </div>
  </div>
</div><!--end content-->
