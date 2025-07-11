@props(['href', 'current' => false, 'arriaCurrent' => false])

@if ($current)
    @php
        $classes = 'bg-gray-900 text-white';
        $arriaCurrent = 'page';
    @endphp
@else
    @php
        $classes = 'text-gray-300 hover:bg-gray-700 hover:text-white';
    @endphp
@endif

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' . $classes, 'arria-current' => $arriaCurrent]) }}
    aria-current="page">{{ $slot }}
</a>
