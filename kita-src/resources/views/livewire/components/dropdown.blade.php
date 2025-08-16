<div>
    {{-- Do your work, then step back. --}}
    @if ($image) 
        <img src="{{ asset($image) }}" alt="{{ $description }}" @class([$style,])>
    @endif

    <label for="{{ $name }}">{{ $label }}</label>

    <select name="{{ $name }}" id="{{ $id }}">
        <option></option>
    </select>
</div>
