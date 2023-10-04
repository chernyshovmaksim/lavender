<li x-data="{ visible: false }" @click="visible = !visible">
    <a class="flex items-center gap-1 py-2" href="#" :class="visible ? 'text-lavender' : ''" x-on:click.prevent>
        <span>{{ $title }}</span>
        <img class="w-3" :class="visible ? 'transform rotate-180' : ''" src="/assets/icons/chevron-down.svg" alt="">
    </a>
    <div x-show="visible" x-transition class="min-w-full py-4 bg-white absolute left-0 top-[37px] z-50 shadow">
        <div class="container flex items-start gap-16">

            <div class="col py-4">
                <h4 class="mb-4 text-lg">По колличеству</h4>
                <ul class="font-bold">
                    <li class="py-2"><a href="/">7 роз</a></li>
                    <li class="py-2"><a href="/">11 роз</a></li>
                    <li class="py-2"><a href="/">15 роз</a></li>
                    <li class="py-2"><a href="/">25 роз</a></li>
                    <li class="py-2"><a href="/">31 роза</a></li>
                    <li class="py-2"><a href="/">51 роза</a></li>
                    <li class="py-2"><a href="/">101 роза</a></li>
                    <li class="py-2"><a href="/">1001 роза</a></li>
                </ul>
            </div>

            <div class="col py-4">
                <h4 class="mb-4 text-lg">По цвету</h4>
                <ul class="font-bold">
                    <li class="py-2"><a href="/">Красные</a></li>
                    <li class="py-2"><a href="/">Белые</a></li>
                    <li class="py-2"><a href="/">Розовые</a></li>
                    <li class="py-2"><a href="/">Желтые</a></li>
                    <li class="py-2"><a href="/">Оранжевые</a></li>
                    <li class="py-2"><a href="/">Черные</a></li>
                </ul>
            </div>

            <div class="col py-4">
                <h4 class="mb-4 text-lg">По виду</h4>
                <ul class="font-bold">
                    <li class="py-2"><a href="/">Одноголовые</a></li>
                    <li class="py-2"><a href="/">Кустовые</a></li>
                    <li class="py-2"><a href="/">Пионовидные</a></li>
                </ul>
            </div>

            <div class="col py-4">
                <h4 class="mb-4 text-lg">По высоте</h4>
                <ul class="font-bold">
                    <li class="py-2"><a href="/">40 см</a></li>
                    <li class="py-2"><a href="/">50 см</a></li>
                    <li class="py-2"><a href="/">60 см</a></li>
                    <li class="py-2"><a href="/">70 см</a></li>
                    <li class="py-2"><a href="/">80 см</a></li>
                    <li class="py-2"><a href="/">90 см</a></li>
                    <li class="py-2"><a href="/">Метровые</a></li>
                </ul>
            </div>

            <div class="col py-4">
                <h4 class="mb-4 text-lg">По стране</h4>
                <ul class="font-bold">
                    <li class="py-2"><a href="/">Россия</a></li>
                    <li class="py-2"><a href="/">Эквадор</a></li>
                    <li class="py-2"><a href="/">Кения</a></li>
                </ul>
            </div>
        </div>
    </div>
</li>
