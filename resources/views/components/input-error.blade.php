@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'fs-6 text-danger']) }}>
        @foreach ((array) $messages as $message)
            <span>{{ $message }}</span>
        @endforeach
    </div>
@endif
