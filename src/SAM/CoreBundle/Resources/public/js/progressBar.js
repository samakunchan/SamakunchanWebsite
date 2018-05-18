////////////////////////                CONFIG                  //////
var ProgressBar = {
    deploy1: 0,
    deploy2: 0,
    deploy3: 0,
    deploy4: 0,
    init: function (data) {
        if (data){
            return 0;
        }
    },
    moveLinearBar: function (barType, size) {
        var width = 10;
        var id = setInterval(frame, 10);
        function frame() {
            if (width >= size) {
                clearInterval(id);
            } else {
                width++;
                document.getElementById(barType).style.width = width + '%';
                document.getElementById(barType).innerHTML = width * 1  + '%';
            }
        }
    },
    moverCircleBar: function (canvasType, value){
        var canvas = document.getElementById(canvasType);
        var state = canvas.getAttribute("data-text");
        var context = canvas.getContext("2d");
        var start = 4.72;
        var cw = context.canvas.width/2;
        var ch = context.canvas.height/2;
        var diff;
        var deploy= 1;
        var circle = setInterval(frame, 30);
        function frame() {
            if (deploy >= value) {
                clearInterval(circle);
            } else {
                diff = (deploy/100) * Math.PI * 2;
                context.clearRect(0 ,0 ,400 ,200);
                context.beginPath();
                context.arc(cw, ch, 50, 0, 2 * Math.PI , false);
                context.fillStyle = '#FFF';
                context.fill();
                context.strokeStyle = '#e7f2ba';
                context.stroke();
                context.fillStyle = '#000';
                context.strokeStyle = '#b3cf3c';
                context.textAlign = 'center';
                context.lineWidth = 15;
                context.font = '10pt Verdana';
                context.beginPath();
                context.arc(cw, ch, 50, start, diff + start, false);
                context.stroke();
                context.fillText(deploy + 1 + '%', cw + 2,ch + 6);
                context.fillText(state, cw, context.canvas.height - 5);
                deploy++;
            }
        }
    }

};

window.addEventListener("load", function () {
    var deployBar = Object.create(ProgressBar);
    setTimeout(function () {
        deployBar.moveLinearBar("bar1", 80);
        deployBar.moveLinearBar("bar2", 60);
        deployBar.moveLinearBar("bar3", 60);
        deployBar.moveLinearBar("bar4", 60);
        deployBar.moveLinearBar("bar5", 60);
        deployBar.moveLinearBar("bar6", 60);
        deployBar.moveLinearBar("bar7", 60);
        deployBar.moveLinearBar("bar8", 60);
        deployBar.moveLinearBar("bar9", 60);
        deployBar.moveLinearBar("bar10", 60);

        deployBar.moverCircleBar("canvas1", 80);
        deployBar.moverCircleBar("canvas2", 60);
        deployBar.moverCircleBar("canvas3", 80);
        deployBar.moverCircleBar("canvas4", 100);
        deployBar.moverCircleBar("canvas5", 90);
        deployBar.moverCircleBar("canvas6", 100);

    },2000)
});
