
<div class="layout inline-between ">
    <div class="inline-between">
        <button class="inline-between gap-3 pr-5 py-2">
            <img src="{{ asset('favicon.svg') }}" width="20px">
            <span class="font-medium text-[var(--color-foreground)]">Kita</span>
        </button>

        <livewire:components.button icon="home" label="Home" variant="ghost" size="text-sm" class="navlink" id="current"/>
        <livewire:components.button icon="calculate" label="Calculator" variant="ghost" size="text-sm" class="navlink"/>
        <livewire:components.button icon="notifications" label="Notifications" variant="ghost" badge="2" size="text-sm" class="navlink"/>
    </div>

    <div class="inline-between">
        <livewire:components.button icon="add" variant="primary" label="|" trailing="arrow_drop_down" size="text-sm" class="gap-1 rounded-br-none"/>
        <livewire:components.button icon="search" label="Search" class="rounded-lg rounded-br-none pr-5 mx-2" size="text-sm"/>
        <livewire:components.button icon="info" variant="ghost"/>
        <livewire:components.button icon="settings" variant="ghost"/>

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