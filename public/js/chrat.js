

// pie chart

var myChart = echarts.init(document.getElementById('pieChart'));

var bottom = (window.innerWidth < 500) ? 'horizontal' : 'vertical';

var option = {
    tooltip: {
        trigger: 'item'
    },
    legend: {
        show: (window.innerWidth < 1024) ? false : true,
        orient: bottom,
        bottom: 10,
        right: (window.innerWidth < 1200) ? -20 : (window.innerWidth > 1736) ?  50  : 'right',
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
                { value: 580, name: 'Email' },
                { value: 484, name: 'Union Ads' },
                { value: 300, name: 'Video Ads' }
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


// Bar Chart

const myChartBar = echarts.init(document.getElementById('barChart'));

const optionBar = {
    xAxis: {
        type: 'category',
        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
    },
    yAxis: {
        type: 'value'
    },
    series: [
        {
            data: [120, 200, 150, 80, 70, 110, 130],
            type: 'bar'
        }
    ]
};

myChartBar.setOption(optionBar);

window.addEventListener('resize', function() {
    myChartBar.resize();
});

