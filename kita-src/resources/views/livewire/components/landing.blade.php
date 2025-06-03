
@push('styles')
    @vite('resources/css/landing.css')
@endpush

<div class="main-section flex-col">
    {{-- At md(768px) remove this navbar --}}
    <div class="navbar-wrapper flex-row-jstart-amid"> 
        <button class="btn-logo active-btn">
            <img src="assets/kita-logo.png" alt="Kita Logo">
        </button>
        
        <flux:navbar class="navbar">
            <flux:navbar.item href="#" icon="users"> ABOUT US </flux:navbar.item>
            <flux:navbar.item href="#" icon="briefcase"> SERVICES </flux:navbar.item>
            <flux:navbar.item href="#" icon="command-line"> DEVELOPERS </flux:navbar.item>
        </flux:navbar>

        <div class="flex-row-jstart-amid ml-auto mr-5 gap-2">
            <flux:button class="active-btn" size="sm" variant="ghost"> Log In </flux:button>
            <flux:button class="active-btn primary-btn" size="sm" variant="primary"> Sign Up </flux:button>
        </div>
    </div>

    <div class="content-wrapper px-0 py-3 sm:p-[1.25rem] md:my-14">

        <div class="content-wrapper glassy-green flex-col-jcenter-astart welcome-wrapper">
            <h1 class="text-outline-bright-green">
                Hi, We’re Kita — Your Smart Kiosk Companion
            </h1>

            <h2 class="blury-white">A Kiosk Inventory & Transaction Application.</h2>

            <p class="blury-white">
                Manage your Sari-Sari Store with ease using Kita, the all-in-one inventory and transaction app designed for small business owners. Track sales, monitory stocks, and streamline daily operation — all from your phone or tablet. Simple. Fast. Reliable.
            </p>

            <flux:button class="active-btn primary-btn" icon="rocket-launch" variant="primary">Join Now</flux:button>
        </div>
    </div>

    @fluxScripts
</div>
