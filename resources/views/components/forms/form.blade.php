<form {{ $attributes(['class' => 'max-w-2xl mx-auto space-y-6', 'method' => 'GET']) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        {{-- Cross Site Request Forgery --}}
        @csrf
        @method($attributes->get('method'))
    @endif
    {{ $slot }}
</form>
