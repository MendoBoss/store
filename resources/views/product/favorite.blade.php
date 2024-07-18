<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="w-full text-center font-bold text-5xl">Favoris</h1>
                    <br>
                    <hr>
                    <br>
                    <div class="bg-white">
                        <div class="mx-auto max-w-2xl px-4  lg:max-w-7xl lg:px-8">
                          {{-- <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2> --}}
                      
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
    </div>
</x-app-layout>
