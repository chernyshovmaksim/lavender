@extends('layouts.layout')

@section('content')
    <div class="container">

        {{-- Breadcrumbs --}}
        <section class="bg-white py-2 px-4 rounded shadow my-8" id="breadcrumbs">
            <ul class="flex items-center text-xs text-lavender gap-4 font-bold">
                <li><a href="/">Главная ➔</a></li>
                <li><a href="/">Цветы в коробках ➔</a></li>
                <li><a href="/">Коробочка №3</a></li>
            </ul>
        </section>


        {{-- Product --}}
        <section class="grid grid-cols-3 gap-8 my-8">
            {{-- Product images --}}
            <div>
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>


            <div>2</div>
            <div>3</div>
        </section>

    </div>
@endsection
