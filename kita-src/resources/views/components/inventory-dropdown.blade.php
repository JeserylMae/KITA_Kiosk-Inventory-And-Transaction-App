 
@props([
    'class',
    'activeTabButton' => 'none',
    'tab' => false
])

<div class="{{ $class }} w-full pl-5 ml-3 border-l border-l-[var(--color-border)]">
    <x-button 
        id="products" 
        variant="ghost" 
        class="{{ ($activeTabButton === 'products') ? 'btn-primary' : 'btn-ghost' }}"
        @click="Livewire.dispatchTo('pages.inventory', 'switchTab', { button: 'products' })"
        > Products 
    </x-button>

    <x-button 
        id="product-category" 
        variant="ghost" 
        class="{{ ($activeTabButton === 'product-category') ? 'btn-primary' : 'btn-ghost' }}"
        @click="Livewire.dispatchTo('pages.inventory', 'switchTab', { button: 'product-category' })"
        > Product Categories
    </x-button>

    <x-button 
        id="transactions" 
        variant="ghost" 
        class="{{ ($activeTabButton === 'transactions') ? 'btn-primary' : 'btn-ghost' }}"
        @click="Livewire.dispatchTo('pages.inventory', 'switchTab', { button: 'transactions' })"
        > Transactions 
    </x-button>

    <x-button 
        id="suppliers" 
        variant="ghost" 
        class="{{ ($activeTabButton === 'suppliers') ? 'btn-primary' : 'btn-ghost' }}"
        @click="Livewire.dispatchTo('pages.inventory', 'switchTab', { button: 'suppliers' })"
        > Suppliers 
    </x-button>
</div>