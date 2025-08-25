
<div class="inline-between btn bg-[var(--color-background)] p-1">
    <span class="material-symbols-outlined"> date_range </span>
    <input type="text" 
           id="{{ $id ?? 'dateRange' }}" 
           name="{{ $name ?? 'dateRange' }}" 
           class="w-55 px-1" 
           placeholder="Select date range" 
           {{ $attributes }}>
</div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const el = document.getElementById(@json($id ?? 'dateRange'));

        if (!el) return;

        flatpickr(el, {
            mode: "range",
            dateFormat: "M-d-Y",
            onChange: function(selectedDates, dateStr) {
                // Look for wire:model on the input
                let model = el.getAttribute('wire:model');
                if (model) {
                    // Update Livewire variable
                    Livewire.find(el.closest('[wire\\:id]').getAttribute('wire:id'))
                        .set(model, dateStr);
                }
            }
        });
    });
</script>   
@endpush