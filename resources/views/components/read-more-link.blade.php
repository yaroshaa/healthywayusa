@php
    $classes =  'inline-block align-center font-medium text-xl py-2 text-dark-green hover:text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

