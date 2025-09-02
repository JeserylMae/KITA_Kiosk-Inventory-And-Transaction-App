
@if (count($option) !== 0)
    <flux:dropdown class="checkbox-items">
        <flux:button icon:trailing="chevron-down"> {{ $label }} </flux:button>
        
        <flux:menu>
            @foreach ($option as $item)
                <flux:menu.checkbox>{{ $item }}</flux:menu.checkbox>
            @endforeach
        </flux:menu>
    </flux:dropdown>
@endif
