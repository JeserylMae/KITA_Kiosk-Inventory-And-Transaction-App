{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

<div class="stack-start container">
    <div class="stack-between header">
        <h1>{{ $greeting }}</h1>
        <h3> Ready to manage your store? </h3>
        <hr>
    </div>

    <div class="stack-start container">
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
    </div>
</div>
