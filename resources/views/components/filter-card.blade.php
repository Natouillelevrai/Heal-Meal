@props(['name' => "default", 'index' => 0, 'length' => 0])

@php
    $translateX = floor($index * 30);
@endphp

<style>
    @media (min-width: 768px) {
        .card-filter-{{ $index }} {
            transform: translateX(-{{ $translateX }}px);
        }
    }
</style>

<div class="flex card-filter-{{ $index }}">
    <input type="radio" name="filter" id="{{ $name }}" class="hidden peer">
    <label for="{{ $name }}" class="flex justify-center items-center capitalize max-h-12 min-w-12 px-4 py-2 
        {{ $index == $length - 1 ? '' : 'pr-8' }} 
        bg-white rounded-xl border-3 peer-checked:bg-[#B7E7EB] peer-checked:text-white border-[#B7E7EB]">
        {{ $name }}
    </label>
</div>