@props(['admin' => null])

<div class="w-full flex justify-between gap-x-12">
    @if (!$admin)
        <div class="bg-[#B7E7EB] flex rounded-xl">
            <x-filter-card name="teste" first="true" />
            <x-filter-card name="teste01" />
            <x-filter-card name="teste02" last="true" />
        </div>
    @else

    @endif

    <button role="option"
        class="flex justify-center items-center capitalize max-h-12 min-w-12 px-4 py-2 bg-[#0E2F46] rounded-xl ring-3 ring-[#0E2F46] text-white">Filter</button>
</div>