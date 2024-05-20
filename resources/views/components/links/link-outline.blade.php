<a {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-3 py-3 border-2 border-blue-600 rounded-full font-semibold text-xs text-blue-600 uppercase tracking-widest focus:outline-none focus:border-white focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>

