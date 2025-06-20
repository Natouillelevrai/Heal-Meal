@props(['element'])

<a class="w-full h-25 bg-white my-2 flex flex-row items-center rounded-[12px]" href="#">
    <div class="w-50/100">
        <p class="pl-5">{{ $element["name"] }}</p>
    </div>

    <div class="w-50/100 h-full bg-cover bg-center rounded-r-[12px] overflow-hidden"
        style="background-image: url('{{ $element["image"] }}');">
        <div class="h-25 rotate-45 w-25 bg-white relative -left-15 rounded-xl drop-shadow-xl/50"></div>
    </div>
</a>