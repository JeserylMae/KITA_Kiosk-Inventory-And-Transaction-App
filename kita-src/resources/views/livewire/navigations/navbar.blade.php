
<div class="layout inline-between ">
    <div class="inline-between">
        <button class="inline-between gap-3 pr-5 py-2">
            <img src="{{ asset('favicon.svg') }}" width="20px">
            <span class="font-medium text-[var(--color-foreground)]">Kita</span>
        </button>

        <x-button 
            icon="home" 
            variant="ghost"
            wire:click="setActiveLink('home')" 
            class="{{ $currentPage === 'home' ? 'navlink navlink-active after:w-full' : 'ghost after:w-0' }}"
            > <span class="text-sm">Home</span> 
        </x-button>

         <x-button 
            icon="calculate" 
            variant="ghost" 
            wire:click="setActiveLink('calculate')" 
            class="{{ $currentPage === 'calculate' ? 'navlink navlink-active after:w-full' : 'ghost after:w-0' }}"
            > <span class="text-sm">Calculator</span> 
        </x-button>

         <x-button 
            icon="notifications" 
            variant="ghost" 
            wire:click="setActiveLink('notifications')" 
            class="{{ $currentPage === 'notifications' ? 'navlink navlink-active after:w-full' : 'ghost after:w-0' }}"
            > <span class="text-sm">Notifications</span> 
        </x-button>
    </div>

    <div class="inline-between">
        <x-button
            icon="add"
            variant="primary"
            trailing="arrow_drop_down"
            class="gap-1 rounded-br-none"
            > <span class="text-sm"> | </span>
        </x-button>

        <x-button
            icon="search"
            wire:click="setActiveLink('search')"
            class="rounded-lg rounded-br-none pr-5 mx-2"
            > <span class="text-sm"> Search </span>
        </x-button>

        <x-button 
            icon="info" 
            variant="ghost"
            wire:click="setActiveLink('info')" 
            class="{{ $currentPage === 'info' ? 'navlink navlink-active' : 'ghost' }}"
            >
        </x-button>

        <x-button 
            icon="settings" 
            variant="ghost"
            wire:click="setActiveLink('settings')" 
            class="{{ $currentPage === 'settings' ? 'navlink navlink-active' : 'ghost' }}"
            >
        </x-button>

        <flux:dropdown position="bottom" align="end" class="ml-1">
            <flux:profile avatar="{{ asset('favicon.svg') }}" name="Olivia Martin" />

            <flux:navmenu>
                <flux:navmenu.item href="#" icon="user">Account</flux:navmenu.item>
                <flux:navmenu.item href="#" icon="building-storefront">Profile</flux:navmenu.item>
                <flux:navmenu.item href="#" icon="arrow-right-start-on-rectangle">Logout</flux:navmenu.item>
            </flux:navmenu>
        </flux:dropdown>
    </div>
</div>