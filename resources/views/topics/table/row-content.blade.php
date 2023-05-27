<section class="py-2 rounded-lg flex flex-col flex-1 h-44">
    <div class="h-full">

        <header class="flex justify-between">

            {{-- <h3 class="font-semibold mb-1.5 h-12"> {{ $getRecord()->title }} </h3> --}}

            <div class="mb-1.5 h-12">
                <x-tables::columns.layout :components="$getComponents()" :record="$getRecord()" :record-key="$recordKey" />
            </div>

            <div class="ml-2 mb-1.5">
                <span
                    class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Badge</span>
            </div>
        </header>


        <p class="text-gray-700">
            {{ $getRecord()->description }}
        </p>
    </div>
</section>
