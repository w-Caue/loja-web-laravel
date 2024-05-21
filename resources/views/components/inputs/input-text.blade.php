@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-gray-300 font-semibold text-xs uppercase px-2 py-3 focus:border-indigo-500 focus:ring-indigo-500 rounded dark:bg-gray-700']) !!}>
