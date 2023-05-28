@props(['topic' => $topic])

<a href="{{ route('pages.topics.show', $topic) }}" class="group max-w-sm h-full"
    aria-labelledby="title-{{ $topic->id }}">
    <div class=" relative px-4 transition rounded-xl shadow-sm border border-gray-200 group-hover:bg-gray-50">
        <div class="flex-1 py-3">
            <div class="col-span-1 flex-1 w-full">
                <section class="py-2 rounded-lg flex flex-col flex-1 h-40 ">
                    <div class="h-full">
                        <header class="flex justify-between">
                            <div class="mb-1.5 h-12">
                                <div class="col-span-1 flex-1 w-full">
                                    <div class="flex w-full justify-start text-start">
                                        <div class="font-bold">
                                            <div class="inline-flex items-center space-x-1 rtl:space-x-reverse">
                                                <span class="sr-only">{{ __('app.pages.topics.show') }}</span>
                                                <span class="" id="title-{{ $topic->id }}">
                                                    {{ $topic->title }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ml-2 mb-1.5">
                                <span
                                    class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Badge</span>
                            </div>
                        </header>


                        <p class="text-gray-700">
                            {{ Illuminate\Support\Str::limit($topic->description, 150) }}
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</a>
