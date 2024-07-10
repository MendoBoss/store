@extends('layouts.store')
@section('content')
    {{-- <h1 class="text-3xl">index</h1> --}}
    <div class="flex">
        <div class="w-1/6">
            @if (isset($cat))
                <x-sidebar :categories="$categories" :cat="$cat"/>
            @else    
                <x-sidebar :categories="$categories"/>
            @endif
        </div>
        <div class="w-5/6">
            @if (isset($cat))
                {{-- <h1 class="sticky top-0 w-full text-center text-3xl pt-10 bg-white pb-5 z-10 ">{{$cat->name}}</h1> --}}
                <img src="/images/storage/{{$cat->image}}" alt="img" width="100%" class="h-96 w-4/5 px-6 pt-10 object-cover mx-auto">
            @endif
            <x-product-card :products="$products" />
            {{-- lien de pagination --}}
            <div class="w-2/4 mx-auto py-5">
                {{$products->onEachSide(0)->links() }}
            </div>
        </div>
    
    </div>

@endsection