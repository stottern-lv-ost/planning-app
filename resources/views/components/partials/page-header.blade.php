@props(['heading', 'subheading'])

<div class="flex flex-col items-start text-left px-1 mb-10">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
        {{ $heading }}
    </h1>

    @if (isset($subheading))
        <p class="mt-3 text-lg text-gray-600">
            {{ $subheading }}
        </p>
    @endif

</div>
