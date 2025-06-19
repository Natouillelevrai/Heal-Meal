@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'text-[#6E7173] bg-white px-4 py-2 ring-0 focus:ring-1 focus:ring-[#B7E7EB] rounded-lg shadow-sm']) }}>
