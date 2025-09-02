
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

    <div id="products" class="card stack-start w-full gap-4">
        <div class="inline-between w-full">
            <div class="inline-start items-center gap-4">
                <h3 class="text-[var(--color-muted-foreground)] font-normal">Filter By:</h3>

                <livewire:components.dropdown-check label="Products" :option="$productOptions"/>
                <livewire:components.dropdown-check label="Brands" :option="$brandOptions"/>
                <livewire:components.dropdown-check label="Category" :option="$categoryOptions"/>
                <livewire:components.dropdown-check label="Selling Price" :option="$sellingPriceOptions"/>
            </div>

            {{-- Buttons --}}
        </div>

        <livewire:components.table
            :headers="[ 'Product', 'Brand', 'Quantity', 'Category', 'Purchase Price', 'Selling Price']"
            :rows="[
                ['Ice Cream', 'ABC', '230', 'Food', '₱ 4,3432.34', '₱ 45.00'],
                ['Bread', 'ABC', '21', 'Food', '₱ 432.34', '₱ 50.00'],
                ['Ice Cream', 'ABC', '230', 'Food', '₱ 4,3432.34', '₱ 45.00'],
            ]"
            empty="No items were invoiced in this time frame."
            checkbox="true"
        />
    </div>
</div>