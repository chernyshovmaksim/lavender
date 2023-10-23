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
        <section class="grid grid-cols-3 gap-8 my-8 p-2 bg-white shadow rounded">
            {{-- Product images --}}
            <div>
                <div class="swiper h-[200px]">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide object-cover">Slide 1</div>
                        <div class="swiper-slide object-cover">Slide 2</div>
                        <div class="swiper-slide object-cover">Slide 3</div>
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


            <div class="p-2" x-data="product">
                <h3 class="text-2xl font-bold">Букет из 1 голубой гортензии</h3>
                <div class="text-green-600 text-xs pt-4">В наличии</div>
                <div class="text-gray-600 text-xs pb-4">Купили: 10 раз</div>
                <div class="font-black text-4xl pb-4 flex items-center gap-2">
                    <div x-data="{
                        price: 1900
                    }" x-text="count * price"></div>
                    <div>₽</div>
                </div>
                <div id="product-count" class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <div @click="decrement" id="decrement"
                            class="hover:cursor-pointer select-none w-8 h-8 rounded flex justify-center items-center text-xl border">
                            -
                        </div>
                        <div id="count"
                            class="w-8 h-8 select-none rounded flex justify-center items-center text-xl border"
                            x-text="count">
                        </div>
                        <div @click="increment" id="increment"
                            class="hover:cursor-pointer select-none w-8 h-8 rounded flex justify-center items-center text-xl border">
                            +
                        </div>
                    </div>
                    <div
                        class="h-8 hover:cursor-pointer px-4 flex items-center justify-center text-xs bg-lavender text-white rounded">
                        В корзину
                    </div>
                    <div
                        class="h-8 hover:cursor-pointer px-2 flex items-center justify-center text-xs bg-white  text-lavender border-2 border-lavender rounded">
                        В один клик
                    </div>
                </div>
            </div>


            <div class="p-2">

                <span class="font-bold text-sm mb-8 block">Информация</span>

                <div id="toggle" x-data="{ toggleShow: false }" class="mb-4">

                    <div class="flex items-center gap-2 text-xs select-none hover:cursor-pointer uppercase underline"
                        @click="toggleShow = !toggleShow">
                        <span>Описание</span>
                        <img :class="toggleShow ? 'transform rotate-180 transition-all' : 'transition-all'" class="w-4"
                            src="/assets/icons/arrow-down.svg" alt="">
                    </div>

                    <span class="text-xs" x-show="toggleShow" x-transition>
                        Роза кустовая оранжевая, пионовидная роза, эустома, диантус, гиперикум, зелень, оазис, шляпная
                        коробка.
                    </span>

                </div>

                <div id="toggle" x-data="{ toggleShow: false }" class="mb-4">

                    <div class="flex items-center gap-2 text-xs select-none hover:cursor-pointer uppercase underline"
                        @click="toggleShow = !toggleShow">
                        <span>Доставка</span>
                        <img :class="toggleShow ? 'transform rotate-180 transition-all' : 'transition-all'" class="w-4"
                            src="/assets/icons/arrow-down.svg" alt="">
                    </div>

                    <span class="text-xs" x-show="toggleShow" x-transition>
                        <ul class="text-xs list-disc pl-4 flex flex-col gap-3 pt-4">
                            <li>Все доставки осуществляются курьером точно в срок.</li>
                            <li>После доставки мы предоставляем фотоотчёт с получателем.</li>
                            <li>Доставка осуществляется в течение 1 часа 30 минут.</li>
                        </ul>
                    </span>

                </div>

                <div id="toggle" x-data="{ toggleShow: false }" class="mb-4">

                    <div class="flex items-center gap-2 text-xs select-none hover:cursor-pointer uppercase underline"
                        @click="toggleShow = !toggleShow">
                        <span>Оплата</span>
                        <img :class="toggleShow ? 'transform rotate-180 transition-all' : 'transition-all'" class="w-4"
                            src="/assets/icons/arrow-down.svg" alt="">
                    </div>

                    <span class="text-xs" x-show="toggleShow" x-transition>
                        <ul class="text-xs list-disc pl-4 flex flex-col gap-3 pt-4">
                            <li>Все доставки осуществляются курьером точно в срок.</li>
                            <li>После доставки мы предоставляем фотоотчёт с получателем.</li>
                            <li>Доставка осуществляется в течение 1 часа 30 минут.</li>
                        </ul>
                    </span>

                </div>

            </div>
        </section>

    </div>
@endsection
