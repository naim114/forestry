// Extracting data for the chart
var xValues = dataPoints.map(function (point) {
    return point.cutRegime;
});
var prodValues = dataPoints.map(function (point) {
    return point.PROD;
});
var dmgValues = dataPoints.map(function (point) {
    return point.DMG;
});
var growthValues = dataPoints.map(function (point) {
    return point.GROWTH;
});

// Creating the chart
new Chart("recChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            label: 'PROD',
            backgroundColor: 'blue',
            data: prodValues
        },
        {
            label: 'DMG',
            backgroundColor: 'red',
            data: dmgValues
        },
        {
            label: 'PROD30',
            backgroundColor: 'green',
            data: growthValues
        }
        ]
    },
    options: {
        legend: {
            display: true,
            position: 'right'
        },
        title: {
            display: true,
            text: "Forest Data"
        },
        tooltips: {
            enabled: true
        }
    }
});
