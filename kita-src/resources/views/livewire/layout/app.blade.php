<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => $title])
    @stack('styles')
    @livewireStyles
</head>

<body style="background-color: var(--color-dark-green-20)">
    <div class="bg-cover bg-right bg-no-repeat bg-fixed w-screen mx-0 md:mx-auto lg:max-w-[90rem] h-max shadow-2xl shadow-black"
         style="background-image: url('{{ $bgImgUrl }}')">
        
        {{ $slot }}

    </div>
    @livewireScripts
    @fluxScripts
</body>
</html>
