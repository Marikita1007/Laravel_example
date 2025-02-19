@if(['type' => 'a']) @endif

<button type="{{ $type ? 'a' : 'button' }}">{{ $slot }}</button>
