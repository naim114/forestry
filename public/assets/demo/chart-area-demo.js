// Extract data for chart
var labels = [];
var data = [];
treeData.forEach(item => {
    labels.push(item.species);
    data.push(item.total);
});

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Number of Trees',
            lineTension: 0.3,
            backgroundColor: "rgba(2,117,216,0.2)",
            borderColor: "rgba(2,117,216,1)",
            pointRadius: 5,
            pointBackgroundColor: "rgba(2,117,216,1)",
            pointBorderColor: "rgba(255,255,255,0.8)",
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(2,117,216,1)",
            pointHitRadius: 50,
            pointBorderWidth: 2,
            data: data,
        }],
    },
    // options: {
    //     scales: {
    //         xAxes: [{
    //             gridLines: {
    //                 display: false
    //             },
    //             ticks: {
    //                 maxTicksLimit: 6
    //             }
    //         }],
    //         yAxes: [{
    //             ticks: {
    //                 min: 0,
    //                 maxTicksLimit: 5
    //             },
    //             gridLines: {
    //                 display: true
    //             }
    //         }],
    //     },
    //     legend: {
    //         display: false
    //     }
    // }
});
