{{-- Care about people's approval and you will be their prisoner. --}}

<div class="w-full">
    <div id="heatmap" class="w-xl md:w-2xl lg:w-full"></div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:init', () => {
        let heatmap;

        function getHeatmapOptions() {
            return {
                series: @json($series),
                chart: {
                    height: 300,
                    type: 'heatmap',
                    toolbar: { show: false }
                },
                plotOptions: {
                    heatmap: {
                        shadeIntensity: 0.5,
                        radius: 5,
                        useFillColorAsStroke: false,
                        colorScale: { ranges: @json($ranges)}
                    }   
                },
                grid: {
                    borderColor: 'var(--color-border)',  
                    strokeDashArray: 4,       
                    xaxis: { lines: { show: true } },
                    yaxis: { lines: { show: true } }
                },
                xaxis: {
                    labels: {
                        style: {
                            colors: 'var(--color-secondary-foreground)',   
                            fontSize: '10px',    
                            fontWeight: 400,    
                            fontFamily: 'inherit'
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: 'var(--color-secondary-foreground)',   
                            fontSize: '10px',    
                            fontWeight: 400,    
                            fontFamily: 'inherit'
                        }
                    }
                },
                legend: {
                    labels: {
                        useSeriesColors: false,
                        colors: 'var(--color-secondary-foreground)'
                    },
                    offsetX: 0, 
                    offsetY: -5,
                    floating: true,
                    position: 'top',
                    horizontalAlign: 'right',
                    fontSize: '12px',    
                    fontWeight: 400,    
                    fontFamily: 'inherit'
                },
                tooltip: {
                    enabled: true,
                    style: {
                        fontSize: '12px',
                        fontFamily: 'inherit'
                    },
                    theme: 'dark'
                },
                dataLabels: { enabled : false },
                stroke: { width: 3, colors: ['var(--color-card)'] },
                title: { 
                    text: @json($title), 
                    floating: true,
                    margin: 20,
                    style: {
                        fontSize:  '16px',
                        fontWeight:  '500',
                        fontFamily:  'inherit',
                        color:  'var(--color-vix-3)'
                    }   
                }
            };
        }

        Livewire.on('heatmap-loaded', () => {
            if (heatmap) heatmap.destroy();
            heatmap = new ApexCharts(document.querySelector('#heatmap'), getHeatmapOptions());
            heatmap.render();
        })
    });
</script>
@endpush