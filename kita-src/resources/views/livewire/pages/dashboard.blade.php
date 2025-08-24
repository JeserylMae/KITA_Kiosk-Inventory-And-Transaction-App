{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

<div class="stack-start container">
    <div class="stack-between header">
        <h1>{{ $greeting }}</h1>
        <h3> Ready to manage your store? </h3>
        <hr>
    </div>

    <div class="stack-start container">
        <div class="inline-start gap-4">
            <div class="card w-max bg-[var(--color-primary)]">
                <div class="inline-between mb-2">
                    <h3>Sales Snapshot</h3>
                    
                    <flux:select class="dropdown" size="sm">
                        <flux:select.option selected>Day</flux:select.option>
                        <flux:select.option>Week</flux:select.option>
                        <flux:select.option>Month</flux:select.option>
                        <flux:select.option>Quarterly</flux:select.option>
                        <flux:select.option>Year</flux:select.option>
                    </flux:select>
                </div>
        
                <div class="w-max h-max grid grid-cols-3 text-center gap-x-4">
                    <h1 class="min-w-[8rem]">₱ {{ number_format($revenue, 2) }}</h1>
                    <h1 class="min-w-[8rem]">₱ {{ number_format($profit, 2) }}</h1>
                    <h1 class="min-w-[8rem]">₱ {{ number_format($sales, 2) }}</h1>
                    <p class="uppercase text-[var(--color-secondary-foreground)]">Revenue</p>
                    <p class="uppercase text-[var(--color-secondary-foreground)]">Profit</p>
                    <p class="uppercase text-[var(--color-secondary-foreground)]">Sales</p>
                </div>
            </div>
            <div class="!w-full">
                <livewire:components.area-chart 
                    width="200"
                    height="110"
                    name="Rate"
                    title="Stock Turnover Rate"
                    :xshowLabel="false"
                    :yshowLabel="false"
                    :data="[23, 35, 89]"
                    :category="['jan', 'feb', 'mar']"
                    class="bg-[var(--color-card)] border border-[var(--color-border)]"
                />
            </div>
        </div>
        
        <div class="card">
            <livewire:components.heatmap title="Stock Status & Availability"/>
        </div>

        <div class="card w-full overflow-x-auto">
            <div class="inline-between w-full mb-2">
                <h3 class="text-[var(--color-vix-3)]"> Products Near Expiry </h3>
                <x-button variant="primary" trailing="add_circle" class="py-1"> Restock </x-button>
            </div>

            <table class="border-none w-full">
                <thead>
                    <tr class="bg-[var(--color-background)]"> 
                        <th>Products</th>
                        <th>Brand</th>
                        <th>Expiry Date</th>
                        <th>Quantity</th>
                        <th>Days Until Expiry</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $row)
                        <tr>
                            <td>{{ $row['product'] }}</td>
                            <td>{{ $row['brand'] }}</td>
                            <td class="text-center">{{ $row['expiry_date'] }}</td>
                            <td class="text-center">{{ $row['quantity'] }}</td>
                            <td class="text-center">{{ $row['days_until_expiry'] }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center py-5"> No items were invoiced in this time frame. </td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
