<div class="rounded shadow bg-white p-4 relative" x-data="{ visible: false }" @mouseover="visible = true"
    @mouseleave="visible = false" x-intersect.threshold.50="$refs.img.src = $refs.img.dataset.img">
    <a class="block relative w-full h-[250px] overflow-hidden" href="{{ route('product') }}">
        <img x-ref="img" x-transition class="w-full h-full object-cover" src="/assets/img/1x1.webp"
            data-img="/assets/img/bouquet-1.webp" alt="">

        <span x-show="visible" class="absolute z-10 left-0 bottom-0 py-2 bg-white text-xs text-black"
            x-transition.opacity>
            7 красных роз, крафтовая бумага, атласная ленточка, слюда
        </span>
    </a>
    <div class="py-4">
        <div class="flex items-center gap-2">
            <img class="w-4" src="/assets/icons/check-circle.svg" alt="">
            <span class="text-xs text-green-600">В наличии</span>
        </div>
        <div class="items-center gap-2 hidden">
            <img class="w-4" src="/assets/icons/phone-forwarded.svg" alt="">
            <span class="text-xs text-orange-600">Под заказ</span>
        </div>
    </div>
    <div class="pb-4">
        <a href="/" class="text-xl">
            7 Красных роз
        </a>
    </div>
    <div class="pb-4">
        <a href="/" class="font-bold">
            1700 ₽
        </a>
    </div>
    <div class="absolute top-8 -left-3 flex flex-col gap-2">
        <div class="py-1 px-4 bg-white border-gray-700 border-2 text-gray-700 text-xs rounded">Хит продаж</div>
        <div class="py-1 px-4 bg-white border-gray-700 border-2 text-gray-700 text-xs rounded">Акция</div>
    </div>
    <div class="flex absolute left-0 w-full -bottom-8 z-[100] shadow" x-show="visible" x-transition.opacity>
        <a class="flex-1 py-2 px-4 text-center bg-lavender text-sm text-white rounded-bl font-semibold" href="/">В
            корзину
        </a>
        <a class="flex-1 py-2 px-4 text-center bg-white text-sm rounded-br" href="/">
            В один клик
        </a>
    </div>
</div>
