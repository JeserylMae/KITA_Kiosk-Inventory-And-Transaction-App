{{-- The Master doesn't talk, he acts. --}}

<div>
    <div id="areaChart" 
         class="stack-center w-max h-max rounded-2xl pt-1 pl-1 {{ $class }}">
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:init', () => {
        let areaChart;

        function getAreaChartOptions() {
            return {
                chart: {
                    width: @json($width),
                    height: @json($height),
                    type: "area",
                    foreColor: 'var(--color-foreground)',
                    zoom: { enabled: @json($zoom) },
                    toolbar: { show: false },
                    grid: { padding: { top:0, right:0, bottom:0, left:0 } }
                },
                colors: ["var(--color-primary)"], 
                stroke: { curve: 'smooth', width: 2, colors: ["var(--color-vix-3)"] },
                fill: { type: "solid", colors: ["var(--color-primary)"] },
                title: {
                    text: @json($title),
                    floating: true,
                    align: 'left',
                    style: {
                        fontSize: '16px',
                        fontWeight: 400,
                        fontFamily: 'var(--font-sans)',
                        color: 'var(--color-secondary-foreground)',
                    }
                },
                subtitle: { text: @json($subtitle) },
                dataLabels: { enabled: @json($enableLabel) },
                series: [{
                    name: @json($name),
                    data: @json($data)
                }],
                xaxis: {
                    categories: @json($category),
                    labels: { show: @json($xshowLabel) },
                    axisTicks: { show: false },
                    axisBorder: { show: false },
                    style: {
                        fontSize: '10px',
                        fontWeight: 400,
                        fontFamily: 'var(--font-sans)',
                        colors: 'var(--color-secondary-foreground)'
                    }
                },
                yaxis: {
                    opposite: true,
                    labels: { show: @json($yshowLabel) },
                    style: {
                        fontSize: '10px',
                        fontWeight: 400,
                        fontFamily: 'var(--font-sans)',
                        colors: 'var(--color-secondary-foreground)'
                    },
                    axisTicks: { show: false },
                    axisBorder: { show: false }
                },
                grid: {
                    show: true,
                    borderColor: 'var(--color-border)',
                    strokeDashArray: 0,
                    position: 'back',
                    xaxis: { lines: { show: true } },   
                    yaxis: { lines: { show: true } },  
                },
                legend: { horizontalAlign: @json($xLegendAlign) },
                tooltip: { 
                    followCursor: true,
                    theme: 'dark',
                    style: {
                        fontSize: '12px',
                        fontFamily: 'inherit'
                    }, 
                }
            };
        }

        Livewire.on('area-loaded', () => {
            if (areaChart) areaChart.destroy(); 
            areaChart = new ApexCharts(document.querySelector("#areaChart"), getAreaChartOptions());
            areaChart.render();
        });
    });
</script>
@endpush
