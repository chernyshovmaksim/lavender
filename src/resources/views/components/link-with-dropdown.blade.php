<li class="relative" x-data="{ visible: false }" @click="visible = !visible">
    <a class="flex items-center gap-1 py-2" :class="visible ? 'text-lavender' : ''" href="#" x-on:click.prevent>
        <span>{{ $title }}</span> 
        <img class="w-3" :class="visible ? 'transform rotate-180' : ''" src="/assets/icons/chevron-down.svg" alt="">
    </a>

    <ul x-show="visible" x-transition
        class="rounded rounded-tl-none rounded-tr-none bg-white p-4 absolute flex flex-col gap-4 text-xs top-9 shadow left-0 min-w-[200px]">
        @foreach ($items as $item)
            <li><a href="{{ $item['path'] }}">{{ $item['title'] }}</a></li>
        @endforeach
    </ul>
</li>
