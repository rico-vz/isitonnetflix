@extends('layouts.app')

@section('title', 'Is {{ $title }} on Netflix?')

@push('styles')
    <script src="https://cdn.tailwindcss.com"></script>
@endpush

@section('content')
    @if (isset($results))
        @if ($results['results'] != null)

            <section class="pt-20 pb-36 bg-black overflow-hidden">
                <div class="container mx-auto px-4">
                    <div class="md:max-w-lg mx-auto text-center mb-20">
                        <h2 class="mb-4 font-heading font-semibold text-white text-6xl sm:text-7xl">Results</h2>
                        <p class="text-lg text-gray-400">We found <span
                                class="text-white font-bold">{{ count($results['results']) }}</span> results for
                            <span class="text-white font-bold">{{ $title }}</span>.
                            Don't see what you were looking for? It might not be on Netflix.
                        </p>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        @foreach ($results['results'] as $result)
                            @php
                                $img = 'https://via.placeholder.com/166x233';
                                if ($result['poster'] != 0 && $result['poster'] != null) {
                                    $img = $result['poster'];
                                }
                                if ($result['img'] != 0 && $result['img'] != null) {
                                    $img = $result['img'];
                                }
                            @endphp
                            <div class="w-full md:w-1/2 xl:w-1/4 p-3">
                                <a class="group" href="#">
                                    <div class="group flex flex-col justify-end h-full relative overflow-hidden rounded-10">
                                        <img class="mx-auto w-full transform group-hover:scale-110 transition ease-out duration-500"
                                            src="{{ $img }}" alt="{{ $result['title'] }}">
                                        <div class="absolute bottom-0 left-0 w-full p-2.5">
                                            <div class="p-5 w-full bg-black bg-opacity-80 rounded-md">
                                                <h2
                                                    class="mb-2 font-heading font-medium text-xs uppercase text-gray-400 tracking-px">
                                                    {{ $result['year'] }} | {{ $result['title_type'] }}</h2>
                                                <p
                                                    class="font-heading font-semibold text-lg text-white group-hover:underline">
                                                    {{ $result['title'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
        @endif
    @endif
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
