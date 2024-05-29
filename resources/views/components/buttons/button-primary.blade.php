<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center p-2 bg-blue-700 rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-600 focus:bg-indigo-600 active:bg-indigo-900 focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
