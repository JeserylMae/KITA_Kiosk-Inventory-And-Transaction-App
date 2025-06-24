
@push('styles')
    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
@endpush


<div class="main-section flex-col select-none">
    <div class="navbar-wrapper flex-row-jstart-amid fade-on-entry-animation"> 
        <button class="btn-logo active-btn">
            <img src="assets/kita-logo.png" alt="Kita Logo">
        </button>
        
        <flux:navbar class="navbar">
            <flux:navbar.item href="#about" icon="users"> ABOUT US </flux:navbar.item>
            <flux:navbar.item href="#" icon="briefcase"> SERVICES </flux:navbar.item>
            <flux:navbar.item href="#" icon="command-line"> DEVELOPERS </flux:navbar.item>
        </flux:navbar>

        <div class="flex-row-jstart-amid ml-auto mr-5 gap-2">
            <flux:button class="active-btn ghost-btn" 
                         wire:click="loginRedirect" 
                         size="sm" 
                         href="{{ route('login') }}"
                         variant="ghost"> Log In </flux:button>
            <flux:button class="active-btn primary-btn" 
                         wire:click="registerRedirect" 
                         size="sm" 
                         href="{{ route('register') }}"
                         variant="primary"> Sign Up </flux:button>
        </div>
    </div>

    <div class="content-wrapper px-0 py-3 sm:p-[1.25rem] md:my-14">

        <div class="content-wrapper glassy-green flex-col-jcenter-astart welcome-wrapper fade-on-entry-animation">
            <h1 class="text-outline-bright-green text">
                Hi, We’re Kita — Your Smart Kiosk Companion
            </h1>

            <h2 class="blurry-white text">A Kiosk Inventory & Transaction Application.</h2>

            <p class="blurry-white">
                Manage your Sari-Sari Store with ease using Kita, the all-in-one inventory and transaction app designed for small business owners. Track sales, monitory stocks, and streamline daily operation — all from your phone or tablet. Simple. Fast. Reliable.
            </p>

            <flux:button class="active-btn primary-btn" 
                         wire:click="registerRedirect" 
                         icon="rocket-launch" 
                         href="{{ route('register') }}"
                         variant="primary">Join Now</flux:button>
        </div>

        <div id="about" class="flex-col-jcenter-astart pt-4 gap-5 fade-on-entry-animation"> 
            <h2 class="glassy-green text-outline-bright-green py-2 px-6 tracking-wider fade-on-scroll-animation"> About Us </h2>
    
            <x-partials.glassy-text-block 
                blockTitle="Designed for Every Sari-Sari Store Owner"
                imgUrl="{{ asset('assets/about-us-1.png') }}">

                Kita was built with the everyday Filipino store owner in mind. Whether you're running a small neighborhood shop or a growing kiosk, Kita simplifies complex inventory and sales tracking tasks into a seamless digital experience. No more manual logs or lost records — just smart tools that help you monitor stock levels, transactions, and sales trends with ease.
            </x-partials.glassy-text-block>
            
            <x-partials.glassy-text-block 
                blockTitle="Real-Time Insights, Smarter Decisions"
                imgUrl="{{ asset('assets/about-us-2.png') }}">

                With Kita, you gain more than just record-keeping — you gain visibility. Generate detailed reports, analyze daily earnings, and visualize your store’s performance through charts and tables. Our system helps you make data-driven decisions, reduce stock shortages, and stay ahead of your day-to-day operations — all in just a few clicks.
            </x-partials.glassy-text-block>

            <x-partials.glassy-text-block 
                blockTitle="Your Partner in Everyday Business"
                imgUrl="{{ asset('assets/about-us-3.png') }}">

                Kita isn’t just an app — it’s your daily companion in managing and growing your sari-sari store. From recording transactions to generating clear and organized sales summaries, Kita is built to support your routine. Whether you’re restocking shelves or reviewing weekly performance, Kita keeps everything organized so you can focus on what matters most: serving your community and growing your business.
            </x-partials.glassy-text-block>
        </div>
    </div>

    @fluxScripts
</div>
