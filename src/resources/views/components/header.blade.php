<div class="bg-lavender py-1">
    <div class="container text-white text-xs flex items-center md:gap-8 gap-0 justify-between">
        <a href="/" class="flex items-center gap-2">
            <img class="w-3 filter invert" src="/assets/icons/map-pin.svg" alt="">
            <span>Победы 75Е</span>
        </a>
        <a href="/" class="flex items-center gap-2">
            <img class="w-3 filter invert" src="/assets/icons/phone.svg" alt="phone">
            <span>+7 922 539 12 69</span>
        </a>
    </div>
</div>
<header class="pt-4 shadow bg-white relative hidden lg:block">
    <div class="mx-auto container flex items-center overflow-hidden">
        <x-logo />
        <nav class="ml-auto">
            <ul class="flex items-center gap-4 font-serif text-xs text-slate-500">
                <li><a href="/">Доставка</a></li>
                <li><a href="/">Отзывы</a></li>
                <li><a href="/">Корп.Клиентам</a></li>
                <li><a href="/">О нас</a></li>
                <li><a href="/">Контакты</a></li>
            </ul>
        </nav>
        <nav class="ml-12">
            <ul class="flex items-center gap-8 font-sans font-semibold text-sm uppercase text-slate-700">
                <li>
                    <a href="/" class="flex items-center gap-2">
                        <img class="w-4 opacity-70" src="/assets/icons/phone.svg" alt="phone">
                        <span>+7 922 539 12 69</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cart') }}" class="relative">
                        <img class="w-6 opacity-70" src="/assets/icons/cart.svg" alt="cart">
                        <div
                            class="text-[10px] bg-lavender w-4 h-4 rounded-full text-white font-black absolute -top-3 -right-3 flex items-center justify-center">
                            <span>3</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <nav class="border-t-[1px] border-gray-100 mt-4 relative">
        <ul class="container flex items-center justify-between font-normal text-sm text-slate-700">
            <li><a class=" py-2" href="/products">Не дорогие цветы</a></li>
            <x-link-with-megamenu title="Розы" />
            <li><a class=" py-2" href="/">Разные цветы</a></li>
            <li><a class=" py-2" href="/">Букеты</a></li>
            <li><a class=" py-2" href="/">Цветы в коробке</a></li>
            <li><a class=" py-2" href="/">Корзины с цветами</a></li>
            <li><a class=" py-2" href="/">Подарки</a></li>

            <x-link-with-dropdown title="Кому" :items="[
                ['title' => 'Маме', 'path' => '/'],
                ['title' => 'Супруге', 'path' => '/'],
                ['title' => 'Коллеге', 'path' => '/'],
                ['title' => 'Врачу', 'path' => '/'],
                ['title' => 'Учителю', 'path' => '/'],
                ['title' => 'Ребенку', 'path' => '/'],
            ]" />
            <x-link-with-dropdown title="Повод" :items="[
                ['title' => 'Извенение', 'path' => '/'],
                ['title' => 'День рождения', 'path' => '/'],
                ['title' => 'Сказать люблю', 'path' => '/'],
                ['title' => 'День матери', 'path' => '/'],
                ['title' => '8 марта', 'path' => '/'],
                ['title' => 'В роддом', 'path' => '/'],
                ['title' => 'На свадьбу', 'path' => '/'],
            ]" />


        </ul>
    </nav>
</header>

<div id="mobile-header" class="py-12 bg-white">
    <div class="container flex items-center">
        <x-logo />
    </div>
</div>