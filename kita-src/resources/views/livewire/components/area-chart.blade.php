{{-- The Master doesn't talk, he acts. --}}

<div>
    <div id="areachart" class="stack-center w-max h-max rounded-2xl pt-1 pl-1 {{ $class }}"></div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        var options = {
            chart: {
                width: @json($width),
                height: @json($height),
                type: "area",
                foreColor: 'black',
                zoom: {
                    enabled: @json($zoom)
                },
                toolbar: {
                    show: false
                },
                grid: {
                    padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                    }
                }
            },
            colors: ["var(--color-primary)"], 
            stroke: {
                curve: 'smooth',
                width: 2, 
                colors: ["var(--color-vix-3)"] 
            },
            fill: {
                type: "solid",
                colors: ["var(--color-primary)"] 
            },
            title: {
                text: @json($title),
                floating: true,
                align: 'left',
                style: {
                    fontSize: '16px',
                    fontWeight: 400,
                    fontFamily: 'var(--font-sans)',
                    color: 'var(--color-secondary-foreground)',
                },
                grid: {
                    padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                    }
                }
            },
            subtitle: {
                text: @json($subtitle)
            },
            dataLabels: {
                enabled: @json($enableLabel)
            },
            series: [{
                name: @json($name),
                data: @json($data)
            }],
            xaxis: {
                categories: @json($category),
                labels: {
                    show: @json($xshowLabel)
                },
                axisTicks: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                style: {
                    fontSize: '10px',
                    fontWeight: 400,
                    fontFamily: 'var(--font-sans)',
                    colors: 'var(--color-secondary-foreground)'
                },
                grid: {
                    padding: {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0
                    }
                }
            },
            yaxis: {
                opposite: true,
                labels: {
                    show: @json($yshowLabel)
                },
                style: {
                    fontSize: '10px',
                    fontWeight: 400,
                    fontFamily: 'var(--font-sans)',
                    colors: 'var(--color-secondary-foreground)'
                },
                axisTicks: { 
                    show: false 
                },
                axisBorder: { 
                    show: false 
                },
                grid: {
                    padding: {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0
                    }
                }
            },
            legend: {
                horizontalAlign: @json($xLegendAlign)
            },
            tooltip: {
                followCursor: true
            },
        };

        var chart = new ApexCharts(document.querySelector("#areachart"), options);
        chart.render();
    })
</script>
@endpush
