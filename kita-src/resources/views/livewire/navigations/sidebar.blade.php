
<div id="sidebar">
    <livewire:components.button 
        label="Dashboard" 
        variant="filled" 
        id="dashboard" 
        wire:click="setActiveButton('dashboard')"
        class="{{ $currentPage === 'dashboard' ? 'sidebar-item-active' : 'sidebar-item' }}" />

    <livewire:components.button 
        label="Inventory" 
        trailing="arrow_right" 
        variant="filled" 
        wire:click="setActiveButton('inventory')"
        class="{{ $currentPage === 'inventory' ? 'sidebar-item-active' : 'sidebar-item' }}"/>

    <livewire:components.button 
        label="Sales" 
        variant="filled"  
        wire:click="setActiveButton('sales')"
        class="{{ $currentPage === 'sales' ? 'sidebar-item-active' : 'sidebar-item' }}"/>

    <livewire:components.button 
        label="Expenses" 
        variant="filled" 
        wire:click="setActiveButton('expenses')"
        class="{{ $currentPage === 'expenses' ? 'sidebar-item-active' : 'sidebar-item' }}"/>

    <livewire:components.button 
        label="Reports & Analytics" 
        trailing="arrow_right" 
        variant="filled"  
        wire:click="setActiveButton('reports')"
        class="{{ $currentPage === 'reports' ? 'sidebar-item-active' : 'sidebar-item' }}"/>
</div>