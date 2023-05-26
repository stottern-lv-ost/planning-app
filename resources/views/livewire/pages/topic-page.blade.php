<div>
    <div class="flex flex-col items-start text-left px-1">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            {{ __('app.pages.topics.heading') }}
        </h1>

        <p class="mt-3 text-lg text-gray-600">
            {{ __('app.pages.topics.subheading') }}
        </p>
    </div>


    <div class="mt-10">
        {{ $this->table }}
    </div>
</div>
