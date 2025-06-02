
@push('styles')
    @vite('resources/css/landing.css')
@endpush

<div class="main-section flex-col">
    <div class="navbar-wrapper flex-row-jstart-amid">
        <button class="button-logo">
            <img src="assets/kita-logo.png" alt="Kita Logo">
        </button>
        
        <flux:navbar class="navbar">
            <flux:navbar.item href="#" icon="users"> ABOUT US </flux:navbar.item>
            <flux:navbar.item href="#" icon="briefcase"> SERVICES </flux:navbar.item>
            <flux:navbar.item href="#" icon="command-line"> DEVELOPERS </flux:navbar.item>
        </flux:navbar>

        <div class="flex-row-jstart-amid ml-auto mr-5 gap-2">
            <flux:button size="sm" variant="ghost"> Log In </flux:button>
            <flux:button size="sm" variant="primary" class="primary-button"> Sign Up </flux:button>
        </div>
    </div>

    <div class="content-wrapper">

        <div>
            <h1 class="font-heading text-outline-bright-green">
                Hi, We’re Kita — Your Smart Kiosk Companion
            </h1>
        </div>
    </div>

    @fluxScripts
</div>
