{{-- Nothing in the world is as soft and yielding as water. --}}

<div class="inline-start w-max h-max">
    @foreach($paths as $path)
        <a href="{{ $path['link'] }}">{{ $path['name'] }}</a>
    @endforeach
</div>
