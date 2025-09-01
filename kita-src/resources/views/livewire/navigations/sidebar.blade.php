
<div id="sidebar" class="stack-start">
    <x-button 
        id="dashboard" 
        variant="filled" 
        wire:navigate
        href="{{ route('page.dashboard') }}"
        class="order-1 {{ Route::is('page.dashboard') ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Dashboard 
    </x-button>

    <x-button
        id="inventory"
        variant="filled"
        wire:navigate
        href="{{ route('page.inventory') }}"
        trailing="{{ Route::is('page.inventory') ? 'arrow_drop_down' : 'arrow_right' }}"
        class="order-2 {{ Route::is('page.inventory') ? 'sidebar-item-active trailing' : 'sidebar-item' }}"
        > Inventory  
    </x-button>

    <x-button
        id="sales"
        variant="filled"
        wire:navigate
        href="{{ route('page.sales') }}" 
        class="order-4 {{ Route::is('page.sales') ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Sales 
    </x-button>

    <x-button
        id="expenses"
        variant="filled"
        wire:navigate
        href="{{ route('page.expenses') }}"
        class="order-5 {{ Route::is('page.expenses') ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Expenses 
    </x-button>

    <x-button
        id="reports"
        variant="filled"
        wire:navigate
        href="{{ route('page.reports') }}"
        trailing="{{ Route::is('page.reports') ? 'arrow_drop_down' : 'arrow_right' }}"
        class="order-6 {{ Route::is('page.reports') ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Reports & Analytics 
    </x-button>

    @if (request()->routeIs('page.inventory'))
        <div class="order-3 w-full pl-5 ml-3 border-l border-l-[var(--color-border)]">
            <x-button 
                id="products" 
                variant="filled" 
                wire:navigate
                href="{{ route('page.dashboard') }}"
                class="{{ Route::is('page.products') ? 'sidebar-item-active' : 'sidebar-item' }}"
                > Products 
            </x-button>

            <x-button 
                id="product-category" 
                variant="filled" 
                wire:navigate
                href="{{ route('page.dashboard') }}"
                class="{{ Route::is('page.product-category') ? 'sidebar-item-active' : 'sidebar-item' }}"
                > Product Categories
            </x-button>

            <x-button 
                id="transactions" 
                variant="filled" 
                wire:navigate
                href="{{ route('page.dashboard') }}"
                class="{{ Route::is('page.transactions') ? 'sidebar-item-active' : 'sidebar-item' }}"
                > Transactions 
            </x-button>

            <x-button 
                id="suppliers" 
                variant="filled" 
                wire:navigate
                href="{{ route('page.dashboard') }}"
                class="{{ Route::is('page.supplier') ? 'sidebar-item-active' : 'sidebar-item' }}"
                > Suppliers 
            </x-button>
        </div>
    @endif
</div>