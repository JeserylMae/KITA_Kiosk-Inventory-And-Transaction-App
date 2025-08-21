{{-- The Master doesn't talk, he acts. --}}

<div>
    <div id="areachart" class="bg-[var(--color-secondary)] w-max h-max p-2 pb-0 rounded-2xl"></div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        var options = {
            chart: {
                width: @json($width),
                height: @json($height),
                type: "area",
                zoom: {
                    enabled: @json($zoom)
                }
            },
            title: {
                text: @json($title)
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
            fill: {
                opacity: 1,
                type: "solid"
            },
            xaxis: {
                categories: @json($category)
            },
            yaxis: {
                opposite: true
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
