const pieCanvas = document.getElementById('pieCanvas');
new Chart(pieCanvas, {
    type: 'doughnut',
    data: {
        labels: ['Réduction volontaire de la qualité du travail fourni'],
        datasets: [{
            data: [33.3, 50, 16.6],
            backgroundColor: [
                '#a3cd8a',
                '#f7cac5',
                '#e6e6e6'
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
