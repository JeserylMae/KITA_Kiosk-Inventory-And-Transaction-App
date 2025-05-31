<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => $title])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
     @livewireStyles
</head>

<body class="bg-dark-green-20">
    <div class="bg-style-mod main-container"
         style="background-image: url('{{ $bgImgUrl }}')">
        
        {{ $slot }}

    </div>
    @livewireScripts
</body>
</html>
