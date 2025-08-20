
<div id="sidebar">
    <x-button 
        id="dashboard" 
        variant="filled" 
        wire:click="setActiveButton('dashboard')"
        class="{{ $currentPage === 'dashboard' ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Dashboard 
    </x-button>

    <x-button
        id="inventory"
        variant="filled"
        wire:click="setActiveButton('inventory')"
        trailing="{{ $currentPage === 'inventory' ? 'arrow_drop_down' : 'arrow_right' }}"
        class="{{ $currentPage === 'inventory' ? 'sidebar-item-active trailing' : 'sidebar-item' }}"
        > Inventory  
    </x-button>

    <x-button
        id="sales"
        variant="filled"
        wire:click="setActiveButton('sales')"
        class="{{ $currentPage === 'sales' ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Sales 
    </x-button>

    <x-button
        id="expenses"
        variant="filled"
        wire:click="setActiveButton('expenses')"
        class="{{ $currentPage === 'expenses' ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Expenses 
    </x-button>

    <x-button
        id="reports"
        variant="filled"
        wire:click="setActiveButton('reports')"
        trailing="{{ $currentPage === 'reports' ? 'arrow_drop_down' : 'arrow_right' }}"
        class="{{ $currentPage === 'reports' ? 'sidebar-item-active' : 'sidebar-item' }}"
        > Reports & Analytics 
    </x-button>
</div>