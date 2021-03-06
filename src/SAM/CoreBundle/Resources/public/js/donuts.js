Chart.pluginService.register({
    beforeDraw: function (chart) {
        if (chart.config.options.elements.center) {
            //Get ctx from string
            var ctx = chart.chart.ctx;

            //Get options from the center object in options
            var centerConfig = chart.config.options.elements.center;
            var fontStyle = centerConfig.fontStyle || 'Arial';
            var txt = centerConfig.text;
            var color = centerConfig.color || '#000';
            var sidePadding = centerConfig.sidePadding || 20;
            var sidePaddingCalculated = (sidePadding/100) * (chart.innerRadius * 2)
            //Start with a base font of 30px
            ctx.font = "50px " + fontStyle;

            //Get the width of the string and also the width of the element minus 10 to give it 5px side padding
            var stringWidth = ctx.measureText(txt).width;
            var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

            // Find out how much the font can grow in width.
            var widthRatio = elementWidth / stringWidth;
            var newFontSize = Math.floor(30 * widthRatio);
            var elementHeight = (chart.innerRadius * 2);

            // Pick a new font size so it will not be larger than the height of label.
            var fontSizeToUse = Math.min(newFontSize, elementHeight);

            //Set font settings to draw it correctly.
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';
            var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
            var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
            ctx.font = fontSizeToUse+"px " + fontStyle;
            ctx.fillStyle = color;

            //Draw text in center
            ctx.fillText(txt, centerX, centerY);
        }
    }
});
var configFr = {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [
                document.getElementsByClassName('allweb').length,
                document.getElementsByClassName('allhtml').length,
                document.getElementsByClassName('alljs').length,
                document.getElementsByClassName('allphp').length
            ],
            backgroundColor: [
                '#1fff50',
                '#25e9ff',
                '#1b8fff',
                '#1c65ff'
            ],
            label: 'Dataset 2',
            hoverBackgroundColor : [
                '#1fff50',
                '#25e9ff',
                '#1b8fff',
                '#1c65ff'
            ],
            hoverBorderColor: [
                'white',
                'white',
                'white',
                'white'
            ],
            hoverBorderWidth: ['5', '5', '5', '5']
        }],
        labels: [
            'Web général',
            'HTML/CSS',
            'Javascript',
            'PHP'
        ]
    },
    options: {
        responsive: true,
        legend: {
            position: 'right'
        },
        title: {
            display: true,
            text: "Vision d'ensemble des technologies certifiés."
        },
        elements: {
            center: {
                text: 'Certifications',
                sidePadding: 20
            }
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
    }
};
var configEn = {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [
                document.getElementsByClassName('allweb').length,
                document.getElementsByClassName('allhtml').length,
                document.getElementsByClassName('alljs').length,
                document.getElementsByClassName('allphp').length
            ],
            backgroundColor: [
                '#1fff50',
                '#25e9ff',
                '#1b8fff',
                '#1c65ff'
            ],
            label: 'Dataset 2',
            hoverBackgroundColor : [
                '#1fff50',
                '#25e9ff',
                '#1b8fff',
                '#1c65ff'
            ],
            hoverBorderColor: [
                'white',
                'white',
                'white',
                'white'
            ],
            hoverBorderWidth: ['5', '5', '5', '5']
        }],
        labels: [
            'General Web',
            'HTML/CSS',
            'Javascript',
            'PHP'
        ]
    },
    options: {
        responsive: true,
        legend: {
            position: 'right'
        },
        title: {
            display: true,
            text: "General view about all my certificates."
        },
        elements: {
            center: {
                text: 'Certificates',
                sidePadding: 20
            }
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
    }
};
window.onload = function() {

    if (document.getElementById('myChartFr')){
        var ctxFr = document.getElementById('myChartFr').getContext('2d');
        window.myPie = new Chart(ctxFr, configFr);
    }else {
        var ctxEn = document.getElementById('myChartEn').getContext('2d');
        window.myPie = new Chart(ctxEn, configEn);
    }

};