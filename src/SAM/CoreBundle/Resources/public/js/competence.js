var ctx = document.getElementById("myBar").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
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
            data: [0, 0, 0, 6, 6, 3, 3],
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
for (var i = 0 ; i < 9 ; i++){
    document.getElementById("nbHTML").innerHTML += "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
}
for (var j = 0 ; j < 6 ; j++){
    document.getElementById("nbJs").innerHTML += "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
}
for (var k = 0 ; k < 5 ; k++){
    document.getElementById("nbBoot").innerHTML += "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
}

for (var l = 0 ; l < 6 ; l++){
    document.getElementById("nbPHP").innerHTML += "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
}
for (var m = 0 ; m < 6 ; m++){
    document.getElementById("nbSQL").innerHTML += "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
}
for (var n = 0 ; n < 3 ; n++){
    document.getElementById("nbSymf").innerHTML += "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
}
for (var o = 0 ; o < 3 ; o++){
    document.getElementById("nbNode").innerHTML += "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
}