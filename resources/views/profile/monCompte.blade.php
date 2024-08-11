@extends('layouts.shop.shop')
@section('content')
    @auth
        <div class="w-full min-h-screen">
            <!-- Start Hero -->
            <section class="relative lg:pb-24 pb-16 md:mt-24 mt-20">
                <div class="md:container container-fluid relative">
                    <div class="relative overflow-hidden md:rounded-md shadow dark:shadow-gray-700 h-52 bg-[url('../../assets/images/hero/pages.jpg')] bg-center bg-no-repeat bg-cover"></div>
                </div><!--end container-->

                <div class="container relative md:mt-24 mt-16">
                    <div class="md:flex">
                        <x-account-sidebar/>
                        <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-6 md:mt-0">
                            <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                                <h5 class="text-lg font-semibold mb-4">Informations Personnelles :</h5>
                                <form>
                                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                        <div>
                                            <label class="form-label font-medium">Prenom : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input type="text" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" value="{{Auth()->user()->name}}" placeholder="Prenom:" id="prenom" name="name" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Nom : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user-check" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input type="text" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" value="{{Auth()->user()->nom}}" placeholder="Nom:" id="lastname" name="nom" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Date de naissance : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="calendar" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input type="date" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" value="{{Auth()->user()->date_naiss}}" placeholder="date_naiss" name="date_naiss" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Téléphone : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="phone" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input type="tel" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" value="{{Auth()->user()->phone}}" placeholder="phone" name="phone" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Adresse : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="map" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input type="tel" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" value="{{Auth()->user()->address}}" placeholder="address" name="address" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Code postale : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="map" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input type="tel" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" value="{{Auth()->user()->cp}}" placeholder="cp" name="cp" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Ville : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="map" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input type="tel" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" value="{{Auth()->user()->state}}" placeholder="state" name="state" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Pays : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="map" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input type="tel" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" value="{{Auth()->user()->country}}" placeholder="country" name="country" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Ton Email : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input type="email" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" value="{{Auth()->user()->email}}" placeholder="Email" name="email" required="">
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <label class="form-label font-medium">Occupation : </label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="bookmark" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input name="name" id="occupation" type="text" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Occupation :">
                                            </div>
                                        </div>--}}
                                    </div><!--end grid--> 

                                    <div class="grid grid-cols-1">
                                        {{-- <div class="mt-5">
                                            <label class="form-label font-medium">Description : </label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="message-circle" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <textarea name="comments" id="comments" class="ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Message :"></textarea>
                                            </div>
                                        </div> --}}
                                    </div><!--end row-->

                                    <input type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md mt-5" value="Save Changes">
                                </form><!--end form-->
                            </div>

                            {{-- <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-6">
                                <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                    <div>
                                        <h5 class="text-lg font-semibold mb-4">Contact Info :</h5>

                                        <form>
                                            <div class="grid grid-cols-1 gap-5">
                                                <div>
                                                    <label class="form-label font-medium">Phone No. :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="phone" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input name="number" id="number" type="number" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Phone :">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="form-label font-medium">Website :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="globe" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input name="url" id="url" type="url" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Url :">
                                                    </div>
                                                </div>
                                            </div><!--end grid-->

                                            <button class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md mt-5">Add</button>
                                        </form>
                                    </div><!--end col-->
                                    
                                    <div> 
                                        <h5 class="text-lg font-semibold mb-4">Change password :</h5>
                                        <form>
                                            <div class="grid grid-cols-1 gap-5">
                                                <div>
                                                    <label class="form-label font-medium">Old password :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input type="password" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Old password" required="">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="form-label font-medium">New password :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input type="password" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="New password" required="">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="form-label font-medium">Re-type New password :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input type="password" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Re-type New password" required="">
                                                    </div>
                                                </div>
                                            </div><!--end grid-->

                                            <button class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md mt-5">Save password</button>
                                        </form>
                                    </div><!--end col-->

                                </div><!--end row-->
                            </div> --}}

                            <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-6">
                                <h5 class="text-lg font-semibold mb-5 text-red-600">Delete Account :</h5>

                                <p class="text-slate-400 mb-4">Do you want to delete the account? Please press below "Delete" button</p>

                                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-red-600 text-white rounded-md">Delete</a>
                            </div>
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </section><!--end section-->
            <!-- End Hero -->

        </div>
    @endauth
@endsection