const speedCanvas = document.getElementById("speedChart");

const dataFirst = {
    data: [0, 54],
    lineTension: 0,
    fill: false,
    borderColor: '#f7cac5',
};

const dataSecond = {
    data: [0, -21],
    lineTension: 0,
    fill: false,
    borderColor: '#a3cd8a'
};
const speedData = {
    labels: ["2019","2020"],
    datasets: [dataFirst, dataSecond]
};

const chartOptions = {
    legend: {
        display: false,
        position: 'top',
        labels: {
            boxWidth: 100,
            fontColor: 'black'
        }
    },
    plugins: {
        legend: {
            display: false
        }
    }
};

const lineChart = new Chart(speedCanvas, {
    type: 'line',
    data: speedData,
    options: chartOptions
});
