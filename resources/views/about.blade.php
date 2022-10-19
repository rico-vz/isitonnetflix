@extends('layouts.app')

@section('title', 'IION - About')

@push('styles')
    <script src="https://cdn.tailwindcss.com"></script>
@endpush

@section('content')
    <section class="relative pt-16 pb-56 overflow-hidden">
        <div class="relative z-10 container mx-auto px-4">

            <div class="md:max-w-xl mx-auto mb-12">
                <h2 class="mb-5 font-heading font-bold text-6xl  text-white text-center">About</h2>
                <p class="mb-5 text-lg text-white">Find out of your favorite series/movie is listed on Netflix.</p>
                <p class="mb-5 text-lg text-white">This website is not affiliated with Netflix.</p>
                <p class="mb-5 text-lg text-white">Made by Rico Z to learn more about Laravel. This is currently a
                    work-in-progress and improvements will be made.</p>

            </div>
            <div class="group relative md:max-w-max mx-auto">
                <div
                    class="absolute top-0 left-0 w-full h-full opacity-0 group-hover:opacity-50 rounded-lg transition ease-out duration-300">
                </div>
                <button
                    class="p-1 w-full font-heading font-semibold text-xs text-gray-900 group-hover:text-white uppercase overflow-hidden rounded-md">
                    <div class="relative p-5 overflow-hidden rounded-md">
                        <div
                            class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-gray-900 transition ease-in-out duration-500">
                        </div>
                        <div class="relative z-10 flex flex-wrap items-center justify-center -m-1">
                            <div class="w-auto p-1">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 14.75L2.75 9.5M2.75 9.5L8 4.25M2.75 9.5L16.25 9.5" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <a href="/">
                                <div class="w-auto p-1">
                                    <p>GO BACK</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
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
    </script>
@endpush
