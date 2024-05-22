@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold tracking-widest text-xs uppercase text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
