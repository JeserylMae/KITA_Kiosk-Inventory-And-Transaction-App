<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials.head', ['title' => 'Kita'])
   @stack('styles')
   @livewireStyles
   @fluxAppearance
</head>

<body>
    <main>
        <div>
    
            <div>
                <a class="btn-link" href="{{ route('page.login') }}"> Log In </a>
                <a class="btn-link btn-primary" href="{{ route('page.register') }}"> Sign Up </a>
                <flux:button href="{{ route('page.register') }}" icon:trailing="arrow-up-right"> Sign Up </flux:button>
            </div>
        </div>
        <flux:heading class="" size="xl">Welcome to Kita!</flux:heading>
    </main>
    
    @livewireScripts
   @fluxScripts
</body>
</html>