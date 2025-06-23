@props(['admin' => null])

<div>
    @if (!$admin)
        <div class="bg-[#B7E7EB] flex rounded-xl">
            <x-filter-card name="caca"/>
            <x-filter-card name="pipi" />
            <x-filter-card name="crampté" last="true"/>
        </div>
    @else

    @endif
</div>