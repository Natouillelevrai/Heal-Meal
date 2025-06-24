@props(['rate'])

@php
    $fullStars = floor($rate);
    $halfStar = ($rate - $fullStars) >= 0.25 && ($rate - $fullStars) < 0.75;
    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
@endphp

<div class="flex space-x-1 text-[clamp(1rem,2.5vw,1.6rem)] overflow-visible">
    @for ($i = 0; $i < $fullStars; $i++)
        <i class="ri-star-fill text-shadow-lg/30"></i>
    @endfor

    @if ($halfStar)
        <i class="ri-star-half-line text-shadow-lg/30"></i>
    @endif

    @for ($i = 0; $i < $emptyStars; $i++)
        <i class="ri-star-line text-shadow-lg/10"></i>
    @endfor
</div>