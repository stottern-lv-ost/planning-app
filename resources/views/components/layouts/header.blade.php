<header x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white border-b border-gray-200 shadow-sm">
    <nav class="mx-auto flex container items-center justify-between p-6 lg:px-8" aria-label="Global">
        <a href="#" class="-m-1.5 p-1">
            <span class="sr-only">{{ __('app.name') }}</span>
            <img class="h-12 w-auto" src="{{ asset('images/logo.png') }}" alt="">
        </a>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                @click="open = true">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#"
                class="text-sm font-semibold leading-6 text-gray-900 hover:underline focus:underline">Topics</a>

            <a href="#"
                class="text-sm font-semibold leading-6 text-gray-900 hover:underline focus:underline">Admin <span
                    aria-hidden="true">→</span></a>
        </div>
    </nav>
    <div class="lg:hidden" x-ref="dialog" x-show="open" aria-modal="true">
        <div class="fixed inset-0 z-10">
        </div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
            @click.away="open = false">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1">
                    <span class="sr-only">{{ __('app.name') }}</span>
                    <img class="h-12 w-auto" src="{{ asset('images/logo.png') }}" alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Topics</a>
                    </div>

                    <div class="py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
