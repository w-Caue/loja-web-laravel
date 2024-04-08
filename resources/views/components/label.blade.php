@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold tracking-widest text-sm uppercase text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
