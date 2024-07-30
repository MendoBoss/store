
    <div class="relative overflow-hidden group rounded-md shadow dark:shadow-slate-800">
        <a href="{{route('product.category',$category->id)}}" class="text-center">
            <img src="/images/storage/{{$category->image}}" class=" group-hover:scale-110 duration-500 " alt="image_category" style="object-fit: cover !important;height: 20rem;min-width:100%;">
            <span class="bg-white dark:bg-slate-900 group-hover:text-orange-500 py-2 px-6 rounded-full shadow dark:shadow-gray-800 absolute bottom-4 mx-4 text-lg font-medium">{{$category->name}}</span>
        </a>
    </div><!--end content-->
