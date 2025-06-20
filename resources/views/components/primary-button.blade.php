@props(['disabled' => false])

<button type="submit" {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge([
    'class' =>
        'w-full justify-center items-center px-4 py-2 bg-[#0E2F46] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-800 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150' .
        ($disabled ? ' hidden' : ' inline-flex')
]) }}>
    {{ $slot }}
</button>