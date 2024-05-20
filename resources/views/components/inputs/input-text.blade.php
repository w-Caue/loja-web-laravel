@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-white border-gray-400 p-1 focus:border-indigo-500 focus:ring-indigo-500 rounded shadow-sm dark:bg-gray-700']) !!}>
