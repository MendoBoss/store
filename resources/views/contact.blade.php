@extends('layouts.shop.shop')
@section('content')
{{-- Background image --}}
    <div class="sticky top-0 w-full h-screen" style="background-image: url('/images/StockCake-Fashion Show Elegance_1721961364.jpg'); background-repeat:no-repaet; background-attachment: fixed; background-position:center; background-size:cover; filter:blur(10px);">
    </div>
{{-- content --}}
    <div class="relative flex justify-center items-center" style="top:-100vh; width: 100%;  background-color:rgba(128, 128, 128, 0.207); padding:120px 0; margin-bottom:-100vh">
        <div class="flex" style="width: 80%; background-color:rgba(128, 128, 128, 0.266);border-radius:15px ; box-shadow:1px 1px 20px 2px rgba(32, 32, 32, 0.593); overflow:hidden; flex-wrap:wrap !important; justify-content:center;">
            {{-- map --}}
            <div class="flex items-center" style="width: 100%; min-width:500px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.795814439033!2d-61.05233432425845!3d14.610704476828012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c6aa7d507aa7fcf%3A0x91975989a69ffcc2!2sIMFPA%20DILLON!5e0!3m2!1sfr!2sfr!4v1722720462559!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            {{-- inputs --}}
            <div style="width:100%; padding:40px; display:flex; align-items:center; justify-content:space-evenly; gap:2rem; flex-wrap:wrap;">
                {{-- coordonnées --}}
                <div class="flex items-center justify-between flex-col" style="width: 500px; padding:40px 0;">
                    {{-- logo --}}
                    <div class="w-full flex justify-center">
                        <img src="/images/MuriloBoutique.png" alt="logo" width="80%">
                    </div>
                    {{-- coordonnées --}}
                    <div style="width: 100%; padding:0 60px">
                        {{-- <h5 class="text-xl font-bold">Adresse:</h5> --}}
    
                        <ul class="list-none">
                            <li class="flex mt-3">
                                <i data-feather="map-pin" class="h-4 w-4 me-3 mt-1"></i>
                                <a href="" data-type="iframe" class="lightbox text-slate-900 text-xl font-medium">1419 Riverwood Drive, <br> Redding, CA 96001</a>
                            </li>
                            
                            <li class="flex mt-3">
                                <i data-feather="mail" class="h-4 w-4 me-3 mt-1"></i>
                                <a href="mailto:contact@example.com" class="text-slate-900 text-xl font-medium">info@cartzio.com</a>
                            </li>
                            
                            <li class="flex mt-3">
                                <i data-feather="phone" class="h-4 w-4 me-3 mt-1"></i>
                                <a href="tel:+152534-468-854" class="text-slate-900 text-xl font-medium">(+12) 1546-456-856</a>
                            </li>
                        </ul>
                    </div>

                </div>
                {{-- inputs --}}
                <div class="flex flex-col justify-evenly gap-2"  style="width: 500px">
                    
                    <div class="mt-4 w-full">
                        <x-input-label style="font-weight: 900 !important;" for="email" :value="__('Email')" />
                        <x-text-input class="block mt-1 w-full" type="text" name="email" style=" box-shadow: 1px 1px 10px 2px rgba(32, 32, 32, 0.359) !important;" />
                    </div>
                    
    
                    <div class="mt-4 w-full">
                        <x-input-label style="font-weight: 900 !important;" for="email" :value="__('Nom')" />
                        <x-text-input class="block mt-1 w-full" type="text" name="email"  style=" box-shadow: 1px 1px 10px 2px rgba(32, 32, 32, 0.359) !important;" />
                    </div>
    
    
                    <div class="mt-4 w-full">
                        <x-input-label style="font-weight: 900 !important;" for="email" :value="__('Tel')" />
                        <x-text-input class="block mt-1 w-full" type="text" name="email"  style=" box-shadow: 1px 1px 10px 2px rgba(32, 32, 32, 0.359) !important;" />
                    </div>
    
    
                    <div class="mt-4 w-full">
                        <x-input-label style="font-weight: 900 !important;" for="email" :value="__('Message')" />
                        <textarea class="block mt-1 w-full" type="text" name="email"  style=" box-shadow: 1px 1px 10px 2px rgba(32, 32, 32, 0.359) !important; border-radius:5px" cols="30" rows="5"></textarea>
                    </div>
    
                    <input type="submit" value="Envoyer" style=" box-shadow: 1px 1px 10px 2px rgba(32, 32, 32, 0.359) !important; border-radius:5px" class="bg-orange-500 hover:bg-orange-600 text-white mt-8">
        
    
                </div>
            </div>
        </div>
    </div>
@endsection