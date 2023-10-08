@if (session('success') || session('deleted'))
    <span {{ $attributes->class([
        "inline-block w-full mx-auto text-center mt-3",
        "text-green-600" => session('success'),
        "text-red-500" => session('deleted')
        ])
    }}>
        {{ session('success') ?? session('deleted') }}
    </span>
@endif
