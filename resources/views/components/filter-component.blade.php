@props(['admin' => null])

@php
    $tab = !$admin ? ['teste01', 'teste02', 'teste03'] : ['admin01', 'admin02', 'admin03'];
@endphp

<div class="w-full flex items-center justify-between gap-x-12 pb-12">
    @if (!$admin)
        <div class="flex flex-wrap justify-between md:justify-start gap-2 md:gap-0 md:gap-y-0 rounded-xl">
            @foreach ($tab as $key => $filterCard)
                <x-filter-card :name="$filterCard" :index="$key" :length="count($tab)" />
            @endforeach
        </div>
    @else
        {{-- No filter cards shown in admin view --}}
    @endif

    <button
        class="flex justify-center items-start capitalize max-h-12 min-w-12 px-4 py-2 bg-[#0E2F46] rounded-xl border-3 border-[#0E2F46] text-white">
        Filter
    </button>
</div>