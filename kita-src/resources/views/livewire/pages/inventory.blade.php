
<div class="{{ $class }} w-full pl-5 ml-3 border-l border-l-[var(--color-border)]">
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

