<div>
    <div class="container p-4 mt-16 bg-white rounded shadow grid grid-cols-4 grid-rows-2 gap-6">
        <div 
            class="row-start-1 row-end-3 col-start-1 col-end-3 bg-slate-200 rounded relative overflow-hidden" 
            x-intersect.threshold.50="$refs.img.src = $refs.img.dataset.image">
                <img 
                    x-ref="img" 
                    src="/assets/img/hero-one.webp" 
                    data-image="/assets/img/hero-one.webp" 
                    class="w-full h-full object-cover" 
                    alt="">

                <div class="absolute w-1/2 top-1/3 left-4">
                    <h3 class="text-xl">Доставка цветов в Оренбурге</h3>
                    <span class="text-sm">Свежие цветы доставляются бесплатно до двери с подарком от студии флористики «Лаванда» каждому покупателю.</span>
                </div>
        </div>



        <div 
            class="row-start-1 row-end-2 col-start-3 col-end-4 bg-lavender rounded relative overflow-hidden" 
            x-intersect.threshold.50="$refs.roses.src = $refs.roses.dataset.image">
            <img
                x-ref="roses"
                src="/assets/img/1x1.webp"
                data-image="/assets/img/category-roses.webp"
                alt=""
                class="w-full h-full object-cover">

            <a href="/" class="absolute top-0 left-0 w-full h-full p-4 flex flex-col justify-center bg-gradient-to-r from-lavender to-transparent text-white">
                <span class="text-xs">Категория</span>
                <h3 class="text-xl">Розы</h3>
            </a>
        </div>



        <div class="row-start-1 row-end-2 col-start-4 col-end-5 bg-lavender rounded min-h-[200px] flex items-center justify-center flex-col overflow-hidden">
            <a href="/" class="text-white text-center font-bold">Заказать звонок <br />от флориста</a>
            <img src="/assets/icons/phone-outgoing.svg" class="filter invert mt-4" alt="">
        </div>



        <div 
            class="row-start-2 row-end-3 col-start-3 col-end-4 bg-lavender rounded relative overflow-hidden" 
            x-intersect.threshold.50="$refs.bouquets.src = $refs.bouquets.dataset.img">
            <img 
                x-ref="bouquets" 
                src="/assets/img/1x1.webp" 
                data-img="/assets/img/category-bouquets.webp" 
                alt="" 
                class="w-full h-full object-cover">

            <a href="/" class="absolute top-0 left-0 w-full h-full p-4 flex flex-col justify-center bg-gradient-to-r from-lavender to-transparent text-white">
                <span class="text-xs">Категория</span>
                <h3 class="text-xl">Букеты</h3>
            </a>
        </div>



        <div 
            class="row-start-2 row-end-3 col-start-4 col-end-5 bg-lavender rounded relative overflow-hidden" 
            x-intersect.threshold.50="$refs.others.src = $refs.others.dataset.img">
            <img 
                x-ref="others" 
                src="/assets/img/1x1.webp" 
                data-img="/assets/img/category-others.webp" 
                alt="" 
                class="w-full h-full object-cover">

            <a href="/" class="absolute top-0 left-0 w-full h-full p-4 flex flex-col justify-center bg-gradient-to-r from-lavender to-transparent text-white">
                <span class="text-xs">Категория</span>
                <h3 class="text-xl">Разные цветы</h3>
            </a>
        </div>
    </div>
</div>
