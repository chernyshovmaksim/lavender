<div>
    <input wire:model.live="search">


    @foreach ($tags as $tag)
        <span>{{ $tag->title }} - {{$tag->slug}}</span> <br>
    @endforeach
</div>

