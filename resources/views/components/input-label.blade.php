@props(['value'])

<label {{ $attributes->merge(['class' => 'text-md text-[#0E2F46]']) }}>
    {{ $value ?? $slot }}
</label>
