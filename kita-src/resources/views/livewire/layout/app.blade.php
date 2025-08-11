<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => $title])
    @stack('styles')
    @livewireStyles
    @fluxAppearance
</head>

<body>
    <div>
        <div>
            
            {{ $slot }}
    
        </div>
    </div>
    @livewireScripts
    @fluxScripts
</body>
</html>
