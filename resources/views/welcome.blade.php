@extends('layouts.app')

@section('title', 'IION - Home')

@push('styles')
    <script src="https://cdn.tailwindcss.com"></script>
@endpush

@section('content')
    <section class="relative pt-28 bg-black overflow-hidden py-24">
        <img class="absolute left-0 bottom-0 w-full" src="/radial2.svg" alt="">
        <div class="relative z-10 container mx-auto px-4">
            <div class="max-w-xl mx-auto text-center">
                <h2 class="mb-6 font-heading font-bold text-6xl sm:text-8xl xl:text-10xl text-white">Is It On Netflix?</h2>
                <p class="mb-11 text-gray-400 text-lg">Find out if your favorite movies &amp; series are available on
                    Netflix.</p>
                <a class="inline-block group p-0.5 font-heading text-base text-gray-900  font-bold bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:bg-gray-50 overflow-hidden rounded-md"
                    href="/search">
                    <div
                        class="transition-all duration-500 relative py-4 px-9 bg-white hover:text-white rounded hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 hover:to-pink-500 ">

                        <span class="relative z-10">Start Searching</span>
                    </div>
                </a>
                <img class="mx-auto mt-36" src="/netarcane.png" alt="Arcane Netflix">
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
