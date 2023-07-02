<script>
var myChart = echarts.init(document.getElementById('pieChartAnggaran'));

var bottom = (window.innerWidth < 500) ? 'horizontal' : 'vertical';

var option = {
    tooltip: {
        trigger: 'item'
    },
    legend: {
        show: (window.innerWidth < 1024) ? false : false,
        orient: bottom,
        bottom: 10,
        right: (window.innerWidth < 1200) ? -20 : (window.innerWidth > 1736) ?  50  : 10,
        top: 'center',
    },
    series: [
        {
            name: 'Access From',
            type: 'pie',
            radius: '50%',
            data: [
                { value: 1048, name: 'Search Engine' },
                { value: 735, name: 'Direct' },
            ],
            label: {
                show: (window.innerWidth < 1024) ? true : (window.innerWidth > 1540) ? true : false
            },
            labelLine: {
                show: (window.innerWidth < 1024) ? true : (window.innerWidth > 1540) ? true : false
            }
        }
    ]
};

myChart.setOption(option);

window.addEventListener('resize', function() {
    myChart.resize();
});
</script>