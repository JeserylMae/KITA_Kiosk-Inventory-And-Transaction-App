{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
<div class="w-full">
    <div id="lineChart"
        class="w-lg sm:w-xl md:w-2xl"></div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:init', () => {
        let lineChart;

        function getLineChartOptions() {
            return {
                series: @json($series),
                chart: {
                    type: 'line',
                    stacked: @json($stacked),
                    width: @json($width),
                    height: @json($height),
                    foreColor: 'var(--color-foreground)',
                    zoom: { type: 'x', enabled: @json($zoom), autoScaleYaxis: true },
                    toolbar: { autoSelected: 'zoom' },
                    grid: { padding: { top:0, right:0, bottom:0, left:0 } }
                },
                dataLabels: { enabled: false },
                markers: { size: 0 },
                title: { 
                    text: @json($title), 
                    floating: true,
                    align: 'left',
                    style: {
                        fontSize: '16px',
                        fontWeight: 500,
                        fontFamily: 'var(--font-sans)',
                        color: 'var(--color-vix-3)',
                    } 
                },
                colors: @json($colors),
                fill: {
                    type: @json($fill),
                    gradient: {
                        shadeIntensity: 1,
                        inverseColors: false,
                        opacityFrom: 0.5,
                        opacityTo: 0,
                        stops: [0, 90, 100]
                    },
                },
                markers: {
                    size: 6, 
                    colors: @json($markerFill), 
                    strokeColors: @json($markerStroke), 
                    strokeWidth: 5,
                    hover: { size: 10 }
                },
                grid: {
                    show: true,
                    xaxis: { 
                        lines: { show: true }
                    },
                    yaxis: { 
                        lines: { show: true }
                    }
                },
                yaxis: { title: { text: @json($title) } },
                xaxis: { categories: @json($category) },
                tooltip: { 
                    shared: false,
                    theme: 'dark',
                    style: {
                        fontSize: '12px',
                        fontFamily: 'inherit'
                    },
                 }
            };
        }
        Livewire.on('line-loaded', () => {
            if (lineChart) lineChart.destroy(); 
            lineChart = new ApexCharts(document.querySelector("#lineChart"), getLineChartOptions());
            lineChart.render();
        });
    });
</script>
@endpush