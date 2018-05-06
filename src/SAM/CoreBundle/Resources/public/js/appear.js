$(document).ready(function () {
    setTimeout(function () {
        $('.part1').fadeIn(0, "linear", function () {
            $('.welcome').fadeIn();
            var text = $("#textTwig")[0].innerHTML;
            var text1 = $("#textTwig1")[0].innerHTML;
            for(var i = 0 ; i < text.length ; i++){
                (function(i) {
                    setTimeout(function() {
                        document.getElementById("textTitle").innerHTML += text.charAt(i);
                    }, i * 10);
                }(i))
            }
            setTimeout(function () {
                document.getElementById("textTitle").innerHTML = "";
                for(var i = 0 ; i < text.length ; i++){
                    (function(i) {
                        setTimeout(function() {
                            document.getElementById("textTitle").innerHTML += text1.charAt(i);
                        }, i * 10);
                    }(i))
                }
            },5000);
            setTimeout(function () {
                $('.webmaster').show();
            }, 7000)
        })
    }, 500);
    setTimeout(function () {
        $('.part2').fadeIn();
    }, 500);
    setTimeout(function () {
        $('.part3').fadeIn();
    }, 1500);
    setTimeout(function () {
        $('.part4').fadeIn();
    }, 2000);
    setTimeout(function () {
        $('.part5').fadeIn();
    }, 2000);
});