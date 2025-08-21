
<div id="sidebar">
    <x-button 
        id="dashboard" 
        variant="filled" 
        wire:navigate
        href="{{ route('page.dashboard') }}"
        class="{{ Route::is('page.dashboard') ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Dashboard 
    </x-button>

    <x-button
        id="inventory"
        variant="filled"
        wire:navigate
        href="{{ route('page.inventory') }}"
        trailing="{{ Route::is('page.inventory') ? 'arrow_drop_down' : 'arrow_right' }}"
        class="{{ Route::is('page.inventory') ? 'sidebar-item-active trailing' : 'sidebar-item' }}"
        > Inventory  
    </x-button>

    <x-button
        id="sales"
        variant="filled"
        wire:navigate
        href="{{ route('page.sales') }}" 
        class="{{ Route::is('page.sales') ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Sales 
    </x-button>

    <x-button
        id="expenses"
        variant="filled"
        wire:navigate
        href="{{ route('page.expenses') }}"
        class="{{ Route::is('page.expenses') ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Expenses 
    </x-button>

    <x-button
        id="reports"
        variant="filled"
        wire:navigate
        href="{{ route('page.reports') }}"
        trailing="{{ Route::is('page.reports') ? 'arrow_drop_down' : 'arrow_right' }}"
        class="{{ Route::is('page.reports') ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Reports & Analytics 
    </x-button>
</div>