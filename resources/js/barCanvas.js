document.addEventListener("DOMContentLoaded", function(e) {
    const barCanvas = document.getElementById('barCanvas');
    new Chart(barCanvas, {
        type: 'bar',
        data: {
            labels: [91,71,85],
            datasets: [{
                data: [91,71,85],
                backgroundColor: [
                    '#a3cd8a',
                    '#efafab',
                    '#f7cac5'
                ]
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
});
