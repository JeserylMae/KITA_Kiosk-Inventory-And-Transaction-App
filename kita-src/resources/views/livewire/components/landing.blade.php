
@push('styles')
    @vite('resources/css/landing.css')
@endpush

<div class="main-section flex-col">
    <div class="navbar-wrapper">
        <button class="button-logo">
            <img src="assets/kita-logo.png" alt="Kita Logo">
        </button>
        
        <flux:navbar class="navbar">
            <flux:navbar.item href="#" icon="users"> ABOUT US </flux:navbar.item>
            <flux:navbar.item href="#" icon="briefcase"> SERVICES </flux:navbar.item>
            <flux:navbar.item href="#" icon="command-line"> DEVELOPERS </flux:navbar.item>
        </flux:navbar>
    </div>

    <div class="content-wrapper">

        <div>
            <h1 class="font-instrument text-5xl font-bold text-outline-bright-green">
                Hi, We’re Kita — Your Smart Kiosk Companion
            </h1>
        </div>
    </div>
</div>
