@props(['name' => "default", 'first' => null, 'last' => null])

<div class="flex">
    <input type="radio" name="filter" id="{{ $name }}" class="hidden peer">
    <label for="{{ $name }}"
        class="flex capitalize max-h-12 w-[150%] min-w-12 px-4 py-2 bg-white {{ !$last ? 'rounded-l-xl' : 'rounded-xl'}} border-3 peer-checked:bg-[#B7E7EB] peer-checked:text-white border-[#B7E7EB] {{ !$first ? 'peer-checked:border-white' : '' }}">{{ $name }}</label>
</div>