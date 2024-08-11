<div class="lg:w-1/4 md:w-1/3 md:px-3">
    <div class="relative md:-mt-48 -mt-32">
        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
            <div class="profile-pic text-center mb-5">
                <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                <div>
                    <div class="relative h-28 w-28 mx-auto">
                        <img src="/images/storage/{{Auth()->user()->image}}" class="rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                        <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-lg font-semibold">{{Auth()->user()->name}}</h5>
                        <p class="text-slate-400">{{Auth()->user()->email}}</p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-100 dark:border-gray-700">
                <ul class="list-none sidebar-nav mb-0 pb-0" id="navmenu-nav">
                    <li class="navbar-item account-menu">
                        <a href="{{route('monCompte')}}" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                            <span class="me-2 mb-0"><i data-feather="airplay" class="size-4"></i></span>
                            <h6 class="mb-0 font-medium">Mon Compte</h6>
                        </a>
                    </li>

                    <li class="navbar-item account-menu">
                        <a href="{{route('favorite.lister')}}" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                            <span class="me-2 mb-0"><i data-feather="heart" class="size-4"></i></span>
                            <h6 class="mb-0 font-medium">Mes Favoris</h6>
                        </a>
                    </li>

                    <li class="navbar-item account-menu">
                        <a href="{{route('commande.lister')}}" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                            <span class="me-2 mb-0"><i data-feather="credit-card" class="size-4"></i></span>
                            <h6 class="mb-0 font-medium">Mes commandes</h6>
                        </a>
                    </li>

                    {{-- <li class="navbar-item account-menu">
                        <a href="user-invoice.html" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                            <span class="me-2 mb-0"><i data-feather="file-text" class="size-4"></i></span>
                            <h6 class="mb-0 font-medium">Invoice</h6>
                        </a>
                    </li>

                    <li class="navbar-item account-menu">
                        <a href="user-social.html" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                            <span class="me-2 mb-0"><i data-feather="share-2" class="size-4"></i></span>
                            <h6 class="mb-0 font-medium">Social Profile</h6>
                        </a>
                    </li>

                    <li class="navbar-item account-menu">
                        <a href="user-notification.html" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                            <span class="me-2 mb-0"><i data-feather="bell" class="size-4"></i></span>
                            <h6 class="mb-0 font-medium">Notifications</h6>
                        </a>
                    </li>

                    <li class="navbar-item account-menu">
                        <a href="user-setting.html" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                            <span class="me-2 mb-0"><i data-feather="settings" class="size-4"></i></span>
                            <h6 class="mb-0 font-medium">Settings</h6>
                        </a>
                    </li> --}}

                    <li class="navbar-item account-menu">
                        <a href="lock-screen.html" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                            <span class="me-2 mb-0"><i data-feather="log-out" class="size-4"></i></span>
                            <h6 class="mb-0 font-medium">Sign Out</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
