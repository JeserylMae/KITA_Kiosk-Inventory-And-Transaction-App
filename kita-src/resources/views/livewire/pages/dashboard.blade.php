{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

<div class="stack-start container">
    <div class="stack-between header">
        <h1>{{ $greeting }}</h1>
        <h3> Ready to manage your store? </h3>
        <hr>
    </div>

    <div class="stack-start container gap-4">
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

        <div class="card w-max">
            <h3 class="text-[var(--color-vix-3)]">Growth Trendline</h3>
            <livewire:components.line-chart
                width="100%"
                height="250"
                zoom="true"
                title=""
                :colors="['var(--color-vix-2)']"
                :markerStroke="['var(--color-vix-2)']"
                :series="[['name' => 'Growth', 'data' => ['34', '34', '65', '123']]]"
            />
        </div>
    </div>
</div>
