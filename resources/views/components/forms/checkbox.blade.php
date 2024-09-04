@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
    ];
@endphp

<x-forms.field :$label :$name>
    <div class="mt-1 flex w-full border border-white/10 bg-white/10 selection:rounded-xl">
        <input {{ $attributes($defaults) }}>
        <span class="pl-1 text-sm">Yes</span>
    </div>
</x-forms.field>
