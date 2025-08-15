<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => $title])
    @stack('styles')
    @livewireStyles
    @fluxAppearance
</head>

<body class="bg-[var(--color-background)] w-full h-max">
    <div class="card border-t-0 w-full">
        <div class="navbar">
            <div class="stack-center">
                <div class="layout inline-between">
                    <div class="inline-between">
                        <button>Kita</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div> {{ $slot }} </div>
    
    @livewireScripts
    @fluxScripts
</body>
</html>
