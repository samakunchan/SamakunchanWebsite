var ctx = document.getElementById("myBar").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["HTML5", "CSS3", "Javascript", "MySQL", "PHP", "NodeJs", "GIT",  "Bootstrap", "Symfony"],
        datasets: [
            {
            label: 'Front end',
            data: [9, 9, 6],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
            },
            {
            label: 'Back end',
            data: [0, 0, 0, 6, 6, 5, 3],
            backgroundColor: [
                '',
                '',
                '',
                'rgba(153, 102, 255, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
                '',
                '',
                '',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
            },
            {
                label: 'Framework',
                data: [0, 0, 0, 0, 0, 0, 0, 5, 3],
                backgroundColor: [
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
                ],
                borderColor: [
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
                ],
                borderWidth: 1
            }
        ]
        },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});