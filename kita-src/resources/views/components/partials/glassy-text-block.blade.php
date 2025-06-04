
@props(['blockTitle' => '', 'imgUrl' => null])

<div class="fade-on-scroll-animation glassy-green flex-col-jcenter-astart content-wrapper gap-4 p-4">
    <h5 class="blurry-white">{{ $blockTitle }}</h5>
    
    <div class="flex flex-col sm:flex-row justify-start items-start gap-4">
        <img class="h-36" src="{{ $imgUrl }}">
        <p class="blurry-white"> {{ $slot }} </p>
    </div>
</div>