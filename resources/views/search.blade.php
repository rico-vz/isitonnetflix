@extends('layouts.app')

@section('title', 'IION - Search')

@push('styles')
    <script src="https://cdn.tailwindcss.com"></script>
@endpush

@section('content')
    <div wire:loading
        class="hidden fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-red-900 opacity-75 flex flex-col items-center justify-center"
        id="loader">
        <div class="loader ease-linear rounded-full border-4 border-t-4 border-red-200 h-12 w-12 mb-4"></div>
        <h2 class="text-center text-white text-xl font-semibold">Searching...</h2>
        <p class="w-1/3 text-center text-white">This may take a few seconds, please don't close this page.</p>
    </div>

    <section class="pt-20 pb-32 bg-black h-full overflow-hidden">
        <div class="container mx-auto px-4">
            <img class="mx-auto mb-28 w-24"
                src="https://static.shuffle.dev/uploads/files/f6/f6ca6dd884032e3b9d9f62786134ca63727b8a05/iion-logo.png"
                alt="">
            <div class="flex flex-wrap items-center -m-6">
                <div class="w-full md:w-1/2 p-6">
                    <div
                        class="bg-gradient-to-r from-red-500 via-red-700 to-rose-900 p-1 mx-auto max-w-max overflow-hidden rounded-full">
                        <img class="object-cover rounded-full"
                            src="https://static.shuffle.dev/uploads/files/f6/f6ca6dd884032e3b9d9f62786134ca63727b8a05/proxy-image.jpg"
                            alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-6">
                    <div class="md:max-w-md">
                        <h2 class="mb-3 font-heading font-bold text-white text-6xl sm:text-7xl">Lets search</h2>
                        <form>
                            <div class="flex flex-wrap -m-2 mb-6">

                                <div class="w-full p-2">
                                    <p class="mb-2.5 font-medium text-base text-white">Title</p>
                                    <div class="p-px bg-gradient-to-r from-red-500 via-red-700 to-rose-900 rounded-lg">
                                        <input
                                            class="w-full px-6 py-4 placeholder-gray-500 text-base text-gray-500 bg-black outline-none focus:ring-4 focus:ring-red-700 rounded-lg"
                                            type="text" placeholder="i.e. Arcane" name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -m-1.5 mb-5">
                                <div class="flex-1 p-1.5">
                                </div>
                            </div>
                            <div class="group relative md:max-w-max mb-5">
                                <div
                                    class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-red-500 via-red-700 to-rose-900 opacity-0 group-hover:opacity-50 rounded-full transition ease-out duration-300">
                                </div>
                                <button
                                    class="p-1 w-full font-heading font-semibold text-xs text-white uppercase tracking-px overflow-hidden rounded-full"
                                    id="button">
                                    <div
                                        class="relative py-5 px-14 bg-gradient-to-r from-red-500 via-red-700 to-rose-900 overflow-hidden rounded-full">
                                        <div
                                            class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-white transition ease-in-out duration-500">
                                        </div>
                                        <input type="submit" value="SEARCH"
                                            class="relative z-10 group-hover:text-gray-900">
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <style>
        .loader {
            border-top-color: #db3434;
            -webkit-animation: spinner 1.5s linear infinite;
            animation: spinner 1.5s linear infinite;
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <script>
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });

        // Show loading modal on click
        document.addEventListener('DOMContentLoaded', function() {
            const loader = document.getElementById('loader');
            const button = document.getElementById('button');

            if (button) {
                button.addEventListener('click', function() {
                    loader.classList.remove('hidden');
                });
            }

        });
    </script>
@endpush
