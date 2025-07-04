<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => $title])
    @stack('styles')
    @livewireStyles
</head>

<body style="background-color: #2b3718">
    <div class="w-screen mx-0 md:mx-auto lg:max-w-[90rem] h-screen" 
         style="background-color: var(--color-dark-green)">
        <div class="bg-cover bg-right bg-no-repeat bg-fixed w-full h-max shadow-2xl shadow-black"
             style="background-image: url('{{ $bgImgUrl }}')">
            
            {{ $slot }}
    
        </div>
    </div>
    @livewireScripts
    @fluxScripts
</body>
</html>
