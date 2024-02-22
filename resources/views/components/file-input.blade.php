@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block mt-1 inline-block border-gray-300 focus:border-gray-400 focus:ring-gray-400 rounded-md']) !!}>
