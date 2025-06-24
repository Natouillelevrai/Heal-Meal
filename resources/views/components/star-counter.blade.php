@props(['rate'])

@php
    $fullStars = floor($rate);
    $halfStar = ($rate - $fullStars) >= 0.25 && ($rate - $fullStars) < 0.75;
    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
@endphp

<div class="flex space-x-1 text-lg">
    @for ($i = 0; $i < $fullStars; $i++)
        <i class="ri-star-fill"></i>
    @endfor

    @if ($halfStar)
        <i class="ri-star-half-line"></i>
    @endif

    @for ($i = 0; $i < $emptyStars; $i++)
        <i class="ri-star-line"></i>
    @endfor
</div>