@props(['topic' => $topic])

<div class="h-full relative px-4 transition rounded-xl shadow-sm border border-gray-200 max-w-sm">
    <div class="">
        <div class="flex-1 py-3">
            <div class="col-span-1 flex-1 w-full">
                <section class="py-2 rounded-lg flex flex-col flex-1 h-44">
                    <div class="h-full">
                        <header class="flex justify-between">
                            <div class="mb-1.5 h-12">
                                <div class="col-span-1 flex-1 w-full">
                                    <div class="flex w-full justify-start text-start">
                                        <div class="font-bold">
                                            <div class="inline-flex items-center space-x-1 rtl:space-x-reverse">
                                                <span class="">
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

        <div class="flex items-center gap-4 flex-wrap md:flex-nowrap justify-start mb-3">
            <a class="inline-flex items-center justify-center gap-0.5 font-medium outline-none hover:underline focus:underline text-sm text-primary-600 hover:text-primary-500 "
                href="{{ route('pages.topics.show', $topic) }}" dusk="filament.tables.action.show">
                <svg class="w-4 h-4 mr-1 rtl:ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                    <path fill-rule="evenodd"
                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd"></path>
                </svg>
                Show topic
            </a>
        </div>
    </div>
</div>
