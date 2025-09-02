
<div class="stack-start container gap-2">
    <div class="stack-between header">
        <h1>Inventory</h1>
        <livewire:components.breadcrumbs :path="[
            ['name' => 'Home', 'link' => 'page.dashboard'],
            ['name' => 'Inventory', 'link' => 'page.inventory'],
            ['name' => 'Products', 'link' => 'page.inventory']
        ]"/>
        <hr>
    </div>

    <x-inventory-dropdown class="inline-start !border-0 !m-0 !mt-6 !p-0" activeTabButton="{{ $activeTabButton }}"/>

    <div id="products" class="card stack-start w-full">
        <livewire:components.table
            :headers="[
                'Product', 
                'Brand', 
                'Quantity', 
                'Category', 
                'Purchase Price', 
                'Selling Price', 
                'Expiry'
            ]"
            :rows="[
                ['Ice Cream', 'ABC', '230', 'Food', '₱ 4,3432.34', '₱ 45.00', 'Jan 25, 2027'],
                ['Bread', 'ABC', '21', 'Food', '₱ 432.34', '₱ 50.00', 'Jan 25, 2027'],
                ['Ice Cream', 'ABC', '230', 'Food', '₱ 4,3432.34', '₱ 45.00', 'Jan 25, 2027'],
            ]"
            empty="No items were invoiced in this time frame."
            checkbox="true"
        />
    </div>
</div>