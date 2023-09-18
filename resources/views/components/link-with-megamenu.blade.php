<li x-data="{ visible: false }" @mouseover="visible = true" @mouseout="visible = false">
    <a class="flex items-center gap-1 py-2" href="#" x-on:click.prevent>
        <span>{{ $title }}</span> 
        <img class="w-3" src="/assets/icons/chevron-down.svg" alt="">
    </a>
    <div class="min-w-full py-4 bg-white absolute left-0 top-8 z-50 shadow">
        <div class="container">
            MegaMenu
        </div>
    </div>
</li>
