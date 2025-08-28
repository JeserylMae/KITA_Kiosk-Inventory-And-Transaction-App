{{-- Nothing in the world is as soft and yielding as water. --}}

<div class="h-max">
    <div id="barChart" class=""></div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:init', () => {
        let barChart;

        function getBarChartOptions() {
            return {
            series: @json($series),
            chart: {
                type: 'bar',
                width: @json($width),
                height: @json($height),
                foreColor: 'var(--color-foreground)',
                toolbar: { show: true },
                grid: { padding: { top:0, right:0, bottom:0, left:0 } }
            },
            colors: @json($colors),
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '80%',
                    borderRadius: 2,
                    borderRadiusApplication: 'end'
                },
            },
            dataLabels: { enabled: false },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
           grid: {
                show: true,
                borderColor: 'var(--color-border)',
                strokeDashArray: 0,
                position: 'back',
                xaxis: { lines: { show: true } },   
                yaxis: { lines: { show: true } },  
            },
            xaxis: { 
                categories: @json($category),
                axisTicks: { show: false },
                axisBorder: { show: false },
                labels: {
                    style: {
                        fontSize: '10px',
                        fontWeight: 400,
                        fontFamily: 'var(--font-sans)',
                        colors: 'var(--color-secondary-foreground)'
                    } 
                }
            },
            yaxis: { 
                labels: {
                    style: {
                        fontSize: '10px',
                        fontWeight: 400,
                        fontFamily: 'var(--font-sans)',
                        colors: 'var(--color-secondary-foreground)'
                    } 
                }
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'right',
                floating: false,
                offsetY: 0,
                offsetX: 0,
                 labels: {
                    colors: 'var(--color-foreground)', 
                    useSeriesColors: false 
                },
                fontSize: '10px',
                fontFamily: 'var(--font-sans)',
                fontWeight: 400
            },
            fill: { opacity: 1 }
        };
    }

        Livewire.on('bar-loaded', () => {
            if (barChart) barChart.destroy();
            barChart = new ApexCharts(document.querySelector('#barChart'), getBarChartOptions());
            barChart.render();
        });
    });
</script>   
@endpush