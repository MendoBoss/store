<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4  lg:max-w-7xl lg:px-8">
    {{-- <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2> --}}

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
@forelse ($products as $product)
{{-- <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8"> --}}
      {{-- <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2> --}}
  
        {{-- <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"> --}}
          <a href="{{route('product.detail',$product)}}">
            <div class="group relative">
            <div class="relative aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <div class="absolute top-1 right-1">
                  @if(isset(Auth()->user()->id))
                    @foreach (Auth()->user()->favorites as $userFavorite)
                    {{-- @dd($userFavorite) --}}
                      @if ($userFavorite->product_id==$product->id)
                        <div class="absolute top-0 right-0" style="width: 20px; height:20px; border-radius:100%; background:rgb(0, 0, 0); filter:blur(10px)"></div>
                        <img src="/images/iconmonstr-heart-filled-48.old.png" alt="favorite" width="15px" class="relative top-1 right-1 z-20">                    
                      @endif
                    @endforeach
                  @endif
                  {{-- <img src="/images/iconmonstr-favorite-2-48.png" alt="favorite" width="30px" class="hidden"> --}}
                  {{-- @dd($product->favorite) --}}
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
        <!-- More products... -->
      {{-- </div> --}}
    {{-- </div>
  </div> --}}
    </div>
  </div>
</div>
  