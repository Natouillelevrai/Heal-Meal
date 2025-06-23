@props(['admin' => null])

<div>
    @if (!$admin)
        <div class="bg-[#B7E7EB] flex rounded-xl">
            <x-filter-card name="teste" first="true" />
            <x-filter-card name="teste01" />
            <x-filter-card name="teste02" last="true" />
        </div>
    @else

    @endif
</div>