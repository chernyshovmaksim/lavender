<div class="rounded shadow bg-white p-4 relative" x-data="{visible: false}" @mouseover="visible = true" @mouseleave="visible = false">
    <a class="block relative w-full h-[300px] overflow-hidden" href="/">
        <img class="w-full h-full object-cover" src="/assets/img/bouquet-1.webp" alt="">
        <span x-show="visible" class="absolute z-10 left-0 bottom-0 p-2 bg-lavender text-xs text-white" x-transition.opacity >7 красных роз, крафтовая бумага, атласная ленточка, слюда</span>
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
    <div class="flex absolute left-0 w-full -bottom-10 z-[100] shadow" x-show="visible" x-transition.opacity>
        <a class="flex-1 p-4 text-center bg-lavender text-sm text-white rounded-bl" href="/">В корзиину</a>
        <a class="flex-1 p-4 text-center bg-white text-sm rounded-br" href="/">Купить в один клик</a>
    </div>
</div>