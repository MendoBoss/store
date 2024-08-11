        <!-- Footer Start -->
        <footer class="w-full footer bg-dark-footer relative bottom-0 left-0 text-gray-200 dark:text-gray-200">    
            <div class=" relative">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div style="padding: 60px 20px">
                            <div class="flex justify-between items-center gap-5">

                                <div style="width: 25%">
                                    <a href="#" class="text-[22px] focus:outline-none">
                                        <img src="/images/MuriloBoutiqueLight.png" alt="logo" width="50%">
                                    </a>
                                    <p class="mt-6 text-gray-300" style="text-align: justify;">En espérant que le site vous plait. En vous rappelant que ce site ne vend pas réelement de produit et qu'il est simplement une site de test. Merci de votre compréhension.</p>
                                    <ul class="list-none mt-6">
                                        <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="dribbble" class="h-4 w-4 align-middle" title="dribbble"></i></a></li>
                                        <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="linkedin" class="h-4 w-4 align-middle" title="Linkedin"></i></a></li>
                                        <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="facebook" class="h-4 w-4 align-middle" title="facebook"></i></a></li>
                                        <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="instagram" class="h-4 w-4 align-middle" title="instagram"></i></a></li>
                                        <li class="inline"><a href="https://x.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="twitter" class="h-4 w-4 align-middle" title="twitter"></i></a></li>
                                        <li class="inline"><a href="mailto:support@shreethemes.in" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="mail" class="h-4 w-4 align-middle" title="email"></i></a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                        
                                <div style="padding: 0 80px !important;width:50%;text-align:center;">
                                    <h5 class="tracking-[1px] text-xl text-gray-100 font-semibold">Catégories :</h5>
                                    <br>

                                    <div style="display: flex; flex-wrap: wrap; gap:2rem; text-align:start;">
                                       @foreach (app\Models\Category::all() as $category)
                                       <div style="word-wrap: nowrap">
                                           <a href="{{route('product.category',$category->id)}}">{{$category->name}}</a>
                                       </div>
                                       @endforeach
                                    </div>
                                </div>
    
                                <div style="width: 10%; display:flex; flex-direction:column; justify-content:center; align-items:flex-end;">
                                    <a href="{{route('contact.affiche')}}">Contact</a>
                                    <a href="{{route('mentionslegales')}}">Mentions Légales</a>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end col-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container relative text-center">
                    <div class="grid md:grid-cols-2 items-center">
                        <div class="md:text-start text-center">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Developpe by <a href="https://www.paradisdunet.com" target="_blank" class="text-reset">Paradis du net</a>.</p>
                        </div>

                        <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                            <li class="inline"><a href=""><img src="https://shreethemes.in/cartzio/layouts/assets/images/payments/american-express.jpg" class="max-h-6 rounded inline" title="American Express" alt=""></a></li>
                            <li class="inline"><a href=""><img src="https://shreethemes.in/cartzio/layouts/assets/images/payments/discover.jpg" class="max-h-6 rounded inline" title="Discover" alt=""></a></li>
                            <li class="inline"><a href=""><img src="https://shreethemes.in/cartzio/layouts/assets/images/payments/mastercard.jpg" class="max-h-6 rounded inline" title="Master Card" alt=""></a></li>
                            <li class="inline"><a href=""><img src="https://shreethemes.in/cartzio/layouts/assets/images/payments/paypal.jpg" class="max-h-6 rounded inline" title="Paypal" alt=""></a></li>
                            <li class="inline"><a href=""><img src="https://shreethemes.in/cartzio/layouts/assets/images/payments/visa.jpg" class="max-h-6 rounded inline" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

