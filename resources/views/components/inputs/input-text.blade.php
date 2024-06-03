@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-gray-300 font-semibold text-xs uppercase px-2 py-3 focus:border-gray-500 focus:ring-gray-500 rounded w-full dark:bg-gray-800 dark:border-gray-700']) !!}>
