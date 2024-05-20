@props(['disabled' => false, 'value', 'type', 'name'])

<div class="relative">
    <input required name="{{ $name ?? '' }}" type="{{ $type ?? 'text' }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' =>
            'w-full font-semibold text-xs uppercase tracking-widest text-gray-600 border border-gray-400 py-3 pl-3 rounded focus:border-blue-600 transition-colors focus:outline-none peer bg-inherit',
    ]) !!} />

    <label for="{{ $name ?? '' }}"
        {{ $attributes->merge(['class' => 'absolute z-50 left-2 top-2 mt-1 px-1 cursor-text peer-focus:text-sm peer-focus:-top-2 peer-focus:mt-0 transition-all peer-focus:text-gray-700 peer-focus:bg-white peer-valid:-top-3 peer-valid:bg-white font-semibold tracking-widest text-sm uppercase text-gray-700']) }}>
        {{ $value ?? $slot }}
    </label>
</div>
