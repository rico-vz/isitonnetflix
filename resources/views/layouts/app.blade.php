<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('styles')
    <title>@yield('title')</title>
</head>

<body class="antialiased font-body bg-body text-body bg-black">
    @section('navbar')
        <section class="overflow-hidden">
            <div class="px-8 py-5 lg:py-8 bg-gray-900">
                <div class="container mx-auto">
                    <div class="flex items-center justify-between">
                        <div class="w-auto">
                            <div class="flex flex-wrap items-center">
                                <div class="w-auto mr-14">
                                    <a href="/">
                                        <img src="/iion_logo.png" alt="IION Logo" class="w-1/3">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-auto">
                            <div class="flex flex-wrap items-center">
                                <div class="w-auto hidden lg:block">
                                    <ul class="flex items-center">
                                        <li class="font-heading mr-9 text-white hover:text-gray-200 text-lg"><a
                                                href="/">Home</a></li>
                                        <li class="font-heading mr-9 text-white hover:text-gray-200 text-lg"><a
                                                href="/search">Search</a></li>
                                        <li class="font-heading text-white hover:text-gray-200 text-lg"><a
                                                href="/about">About</a></li>
                                        <li class="font-heading text-white hover:text-gray-200 text-lg"></li>
                                    </ul>
                                </div>
                                <div class="w-auto lg:hidden">
                                    <a href="#">
                                        <svg class="navbar-burger text-gray-800" width="51" height="51"
                                            viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                                            <path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-80"></div>
                <nav class="relative z-10 px-9 py-8 bg-gray-900 h-full">
                    <div class="flex flex-wrap justify-between h-full">
                        <div class="w-full">
                            <div class="flex items-center justify-between -m-2">
                                <div class="w-auto p-2">
                                    <a class="inline-block" href="#">
                                        <img src="gradia-assets/logos/gradia-name-white.svg" alt="">
                                    </a>
                                </div>
                                <div class="w-auto p-2">
                                    <a class="navbar-burger" href="#">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 18L18 6M6 6L18 18" stroke="#ffffff" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center text-center justify-center py-8 w-full">
                            <ul>
                                <li class="mb-12"><a
                                        class="font-heading font-medium text-lg text-white hover:text-gray-200"
                                        href="/">Home</a></li>
                                <li class="mb-12"><a
                                        class="font-heading font-medium text-lg text-white hover:text-gray-200"
                                        href="/search">Search</a></li>
                                <li><a class="font-heading font-medium text-lg text-white hover:text-gray-200"
                                        href="/about">About</a></li>

                            </ul>
                        </div>

                    </div>
                </nav>
            </div>
        </section>

    @show

    <div class="">
        @yield('content')
    </div>


    @section('footer')
        <section class="py-16 bg-black overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap lg:items-center -m-6">
                    <div class="w-full md:w-auto p-6">
                        <img src="/iion_logo.png" alt="" class="w-1/4">
                    </div>
                    <div class="w-full md:w-1/2 p-6">
                        <ul class="flex flex-wrap -m-5">
                            <li class="p-5"><a class="font-heading text-base text-white hover:text-gray-200"
                                    href="/">Home</a></li>


                            <li class="p-5"><a class="font-heading text-base text-white hover:text-gray-200"
                                    href="mailto:ricoz@tuta.io">Mail</a></li>
                        </ul>
                    </div>
                    <div class="w-auto md:ml-auto p-6">
                        <div class="flex flex-wrap items-center -m-1.5">
                            <div class="w-auto p-1.5">
                                <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.5 6.66669L9.0755 11.0504C9.63533 11.4236 10.3647 11.4236 10.9245 11.0504L17.5 6.66669M4.16667 15.8334H15.8333C16.7538 15.8334 17.5 15.0872 17.5 14.1667V5.83335C17.5 4.91288 16.7538 4.16669 15.8333 4.16669H4.16667C3.24619 4.16669 2.5 4.91288 2.5 5.83335V14.1667C2.5 15.0872 3.24619 15.8334 4.16667 15.8334Z"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                </svg>
                            </div>
                            <div class="w-auto p-1.5">
                                <h3 class="font-heading font-medium text-base text-white">ricoz@tuta.io</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-9">
                    <div class="border-b border-gray-800"></div>
                </div>
                <div class="flex flex-wrap items-center justify-between -m-6">
                    <div class="w-auto p-6">
                        <p class="text-sm text-gray-300">© Copyright 2022. All Rights Reserved by Rico.</p>
                    </div>
                    <div class="w-auto p-6">
                        <div class="flex flex-wrap -m-6">


                        </div>
                    </div>
                </div>
            </div>
        </section>
    @show

    @stack('scripts')

</body>

</html>
