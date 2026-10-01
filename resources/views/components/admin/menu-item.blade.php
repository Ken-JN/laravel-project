@php
    $isActive = request()->is(ltrim($href, '/'));
@endphp

<li>
    <a href="{{ $href }}"
       @class([
           'flex items-center p-2 text-base font-medium rounded-lg transition duration-75 group',
           'bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-white font-semibold' => $isActive,
           'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 hover:text-gray-900 dark:hover:text-white' => !$isActive
       ])
    >
        <svg aria-hidden="true"
             @class([
                 'flex-shrink-0 w-6 h-6 transition duration-75',
                 'text-gray-900 dark:text-white' => $isActive,
                 'text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white' => !$isActive
             ])
             fill="currentColor"
             viewBox="0 0 20 20"
             xmlns="http://w3.org"
        >
            {!! $icon !!}
        </svg>

        <span class="ml-3">{{ $label }}</span>
    </a>
</li>
