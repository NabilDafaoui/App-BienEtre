document.addEventListener('DOMContentLoaded', function () {
    const config = {
        type: 'radar',
        data: {
            labels: ['Santé', 'Social', 'Professionnel', 'Financier'],
            datasets: [{
                label : 'Votre niveau',
                data: [1.0, 2.5, 4.5, 3.0],
                fill: true,
                backgroundColor: 'rgba(255, 99, 132,0.2)',
                borderColor: 'rgb(255, 99, 132)',
            }, {
                label : '',
                data: [5, 5, 5, 5],
                fill: true,
                backgroundColor: 'rgba(255, 255, 255,0.2)',
                borderColor: 'rgba(255, 255, 255,0)',
                pointBackgroundColor: 'rgba(255, 255, 255,0)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor:'rgba(255, 255, 255,0)'
            },
            {
                label : '',
                data: [0, 0, 0, 0],
                fill: true,
                backgroundColor: 'rgba(255, 255, 255,0.2)',
                borderColor: 'rgba(255, 255, 255,0)',
                pointBackgroundColor: 'rgba(255, 255, 255,0)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor:'rgba(255, 255, 255,0)'
            }]
        },
        options: {
            animation: {
                duration: 0
            },
            elements: {
                line: {
                    borderWidth: 3
                }
            },
            scale: {
                ticks: {
                    beginAtZero: false,
                    min: 1,
                    max: 5.0,
                    stepSize: 1,
                }
            }
        }
    };

    var ctx = document.getElementById('radarChart').getContext('2d');
    var myRadarChart = new Chart(ctx, config);
});