<div>

    <nav class="fixed z-30 w-full px-4 py-3 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mx-auto max-w-screen-2xl">
            <div class="flex items-center justify-start">
                <div class="px-4 logo">
                    <a href="{{url('/')}} " class="flex" wire:navigate>
                        <p class="pr-2 text-gray-900">TIME</p>SCHEDULE UCC
                    </a>
                </div>
                <!-- Desktop menu -->
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
                    <ul class="flex flex-col mt-4 space-x-6 text-base font-medium lg:flex-row xl:space-x-8 lg:mt-0">
                        <li>
                            <a href="{{route('adminDashboard')}}" wire:navigate
                                class="block rounded {{request()->routeIs('adminDashboard') ? 'text-[#29d9d5] dark:text-primary-500' :'text-gray-700 hover:text-[#29d9d5] dark:text-gray-400 dark:hover:text-white'}}"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{route('adminProfesseur')}}" wire:navigate
                                class="block text-gray-700 {{request()->routeIs('adminProfesseur') ? 'text-[#29d9d5] dark:text-primary-500' :'text-gray-700 hover:text-[#29d9d5] dark:text-gray-400 dark:hover:text-white'}}">Professeur</a>
                        </li>
                        <li>
                            <a href="{{route('adminCours')}}" wire:navigate
                                class="block text-gray-700 {{request()->routeIs('adminCours') ? 'text-[#29d9d5] dark:text-primary-500' :'text-gray-700 hover:text-[#29d9d5] dark:text-gray-400 dark:hover:text-white'}}">Cours</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block text-gray-700 {{request()->routeIs('adminDashboard') ? 'text-[#29d9d5] dark:text-primary-500' :'text-gray-700 hover:text-[#29d9d5] dark:text-gray-400 dark:hover:text-white'}}">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="flex items-center justify-between lg:order-2">


                <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="tooltip-toggle" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                    Toggle dark mode
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <!-- Apps -->

                <button type="button"
                    class="flex flex-shrink-0 mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="userMenuDropdownButton" aria-expanded="false" data-dropdown-toggle="userMenuDropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full"
                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden w-56 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="userMenuDropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm font-semibold text-gray-900 dark:text-white">Neil Sims</span>
                        <span
                            class="block text-sm font-light text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <ul class="py-1 font-light text-gray-500 dark:text-gray-400"
                        aria-labelledby="userMenuDropdownButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My
                                profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account
                                settings</a>
                        </li>
                    </ul>
                    <ul class="py-1 font-light text-gray-500 dark:text-gray-400"
                        aria-labelledby="userMenuDropdownButton">
                        <li>
                            <a href="#"
                                class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                    class="w-5 h-5 mr-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"></path>
                                </svg> My likes</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                    class="w-5 h-5 mr-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                    </path>
                                </svg> Collections</a>
                        </li>
                    </ul>
                    <ul class="py-1 font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>

                <button type="button" id="toggleMobileMenuButton" data-collapse-toggle="toggleMobileMenu"
                    class="items-center p-2 text-gray-500 rounded-lg md:ml-2 lg:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                    <span class="sr-only">Open menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <nav class="bg-white dark:bg-gray-900">
        <!-- Mobile menu -->
        <ul id="toggleMobileMenu" class="flex-col hidden w-full pt-16 mt-0 text-sm font-medium lg:hidden">
            <li class="block border-b dark:border-gray-700">
                <a href="#" class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0"
                    aria-current="page">Home</a>
            </li>
            <li class="block border-b dark:border-gray-700">
                <a href="#"
                    class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Messages</a>
            </li>
            <li class="block border-b dark:border-gray-700">
                <a href="#"
                    class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Profile</a>
            </li>
            <li class="block border-b dark:border-gray-700">
                <a href="#"
                    class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Settings</a>
            </li>

        </ul>
    </nav>

</div>
