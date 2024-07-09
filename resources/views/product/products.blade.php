@extends('layouts.store')
@section('content')
    <h1 class="text-3xl">index</h1>
    <div class="bg-red-300">
        <h3>Categories :</h3>
        <x-sidebar :$categories/>
        <ul>
            @forelse ($categories as $category)
            <li>
                - <a href="{{route('product.category',$category->id)}}">{{$category->name}}</a>
            </li>
            @empty
                <h1>Pas de categories !</h1>
            @endforelse
        </ul>
    </div>
    <div class="w-full flex flex-wrap gap-5">
        {{-- @dd($products) --}}
        <x-product-card :products="$products" />
    </div>
@endsection