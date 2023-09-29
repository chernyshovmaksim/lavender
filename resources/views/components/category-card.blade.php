<div class="rounded overflow-hidden shadow" x-data x-intersect="$refs.img.src = $refs.img.dataset.img">
    <a href="/" class="flex flex-col bg-white w-full h-full relative p-4">
        <img 
            x-ref="img" 
            class="w-full h-[200px] object-cover" 
            src ="/assets/img/1x1.webp" 
            data-img="/assets/img/category-thumb.webp" 
            alt="">

        <span class="block w-full pt-4 text-center">Название категории</span>
    </a>
</div>