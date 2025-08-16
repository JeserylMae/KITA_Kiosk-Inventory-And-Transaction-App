
{{-- Success is as dangerous as failure. --}}

@if ($variant === 'link')
    <a href="{{ $href }}" class="btn btn-ghost relative {{ $class }}">
        @if ($icon) 
            <span class="material-symbols-outlined !text-[20px]">{{ $icon }}</span> 
        @endif

        @if ($label) 
            <span @class(['my-0', $size, ])> {{ $label }} </span> 
        @endif

        @if($badge)
            <span class="absolute top-2.5 -right-3 bg-[var(--color-muted)] 
                       text-[var(--color-muted-foreground)] text-xs rounded px-1.5">        
                {{ $badge }} 
            </span>
        @endif
    </a>    
@else 
    <button @class([ 'btn', 'btn-' . $variant, $class, 'btn-disabled' => $disabled, ])>    
        <span class="material-symbols-outlined !text-[20px]">{{ $icon }}</span>
        
        @if ($label) 
            <span @class([ $size, ])> {{ $label }} </span> 
        @endif
        
        @if ($trailing) 
            <span class="material-symbols-outlined !text-[20px]">{{ $trailing }}</span> 
        @endif
    </button>
@endif