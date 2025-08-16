
{{-- Success is as dangerous as failure. --}}

@if($variant === 'link')
    <a href="{{ $href }}" class="btn btn-ghost relative">
        <span class="material-symbols-outlined !text-[20px]">{{ $icon }}</span>

        @if ($label) <span class="my-0">{{ $label }}</span> @endif

        @if($badge)
            <span class="absolute top-2.5 -right-2 bg-[var(--color-muted)] text-[var(--color-muted-foreground)] text-xs rounded px-1.5"> {{ $badge }} </span>
        @endif
    </a>
@endif