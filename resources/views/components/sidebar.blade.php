<div class="sticky top-0 pl-5 pt-10">
    <h3 class="underline sha">Categories :</h3>

    <ul class="flex flex-col gap-4 pl-5 justify-evenly my-5">
        @forelse ($categories as $category)
        
        @if (isset($cat)&&$category->id==$cat->id)
            <a href="{{route('product.category',$category->id)}}"><li class="px-8 py-1 bg-blue-950/15 rounded-3xl">
                {{$category->name}}
            </li></a>
        @else
            <a href="{{route('product.category',$category->id)}}"><li class="px-10 py-1 bg-blue-950/5 rounded-3xl shadow-md">
                {{$category->name}}
            </li></a>
        @endif
        
        @empty
            <h1>Pas de categories !</h1>
        @endforelse
    </ul>
    
</div>