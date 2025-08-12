<div>
    <flux:input 
        class="{{ $class }}"
        name="{{ $name }}" 
        label="{{ $label}}" 
        placeholder="{{ $placeholder }}" 
        list="{{ $name }}-list" 
        autocomplete="nope"
        badge="{{ $badge ?? '' }}"
        clearable
    />

    <datalist id="{{ $name }}-list">
        @foreach ($options as $option)
            <option value="{{ $option }}">
        @endforeach
    </datalist>
</div>
