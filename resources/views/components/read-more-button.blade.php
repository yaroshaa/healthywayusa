@php
    $classes =  'inline-block text-white align-center font-medium text-2xl py-2 px-10 bg-dark-green';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

