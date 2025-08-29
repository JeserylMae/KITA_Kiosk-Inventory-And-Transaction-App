
{{-- 
    Sample Usage
    <div>
        <livewire:components.breadcrumbs :path="[
            ['name' => 'Home', 'link' => 'page.dashboard'],
            ['name' => 'Inventory', 'link' => 'page.inventory']
        ]"/>
    </div>
--}}

<div class="inline-start w-max h-max">
    @for ($i = 0; $i < count($path); $i++)

        <a  class="text-base text-[var(--color-muted-foreground)] hover:underline underline-offset-4"
            href="{{ route($path[$i]['link']) }}" 
            wire:navigate> 
            {{ $path[$i]['name'] }}
        </a>
    
        @if ($i !== count($path)-1)
            <p class="mx-2 text-base text-[var(--color-muted-foreground)]"> > </p>
        @endif
    @endfor
</div>
