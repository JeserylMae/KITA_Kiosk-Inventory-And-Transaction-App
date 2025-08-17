
{{-- Success is as dangerous as failure. --}}

@if ($variant === 'link')
    <a href="{{ $href }}" class="btn btn-ghost relative {{ $class }}" id="{{ $id }}">
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
    @php
        $extraClasses = is_array($class) ? $class : explode(' ', $class ?? '');
        $allClasses = array_merge(['btn', 'btn-' . $variant], $extraClasses, $disabled ? ['btn-disabled'] : []);
    @endphp

    <button @class($allClasses) id="{{ $id }}">    
        @if ($icon) 
            <span class="material-symbols-outlined !text-[20px]">{{ $icon }}</span>
        @endif
        
        @if ($label) 
            <span @class([ $size, 'btnlabel'])> {{ $label }} </span> 
        @endif
        
        @if ($trailing) 
            <span class="material-symbols-outlined !text-[20px] btntrailing">{{ $trailing }}</span> 
        @endif
    </button>
@endif