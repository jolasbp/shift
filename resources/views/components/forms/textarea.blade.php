@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'rows' => 3,
        'class' =>
            'resize-y px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6',
        'value' => old($name),
    ];
@endphp
<x-forms.field :$label :$name>
    <textarea {{ $attributes($defaults) }}>{{ $slot }}</textarea>
</x-forms.field>
