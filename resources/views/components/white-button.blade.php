@php
    $classes = 'p-2 border-2 border-gray-400 hover:border-gray-700 rounded text-gray-400 hover:text-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

