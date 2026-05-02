<a 
    {{ $attributes }} 
    aria-current="{{ $active ? 'page' : false }}" 
    class="{{ $active  ? 'bg-gray-900 text-white' : 'text-gray-600' }} 
    rounded-md px-3 py-2 text-sm font-medium">
    {{ $slot}}
</a>