var Slider = {
    num : 0,
    citation: ["Demands a lot of yourself and does not expect much from others. So a lot of trouble will be spared you.",
        "In life we do not do what we want but we are responsible for what we are.",
        "Choose a job you love and you will not have to work a single day of your life.",
    "When asked if you are able to do a job answer: \"Of course, I can!\" Then do your best to get there."],
    author: ["Confusius", "Jean Paul Sartres", "Confusius", "Theodore Roosevelt"],
    move: function () {
        document.getElementById("citation").textContent = ' " ' + this.citation[0] + ' " ';
        document.getElementById("author").textContent = this.author[0];
        setTimeout(function () {
            document.getElementById("citation").style.opacity = "1";
            document.getElementById("citation").style.transitionDuration = "2s";
            document.getElementById("author").style.opacity = "1";
            document.getElementById("author").style.transitionDuration = "2s";
        }, 1000);
        if ( this.num >= this.citation.length ) {
            this.num = 0;
        }
        document.getElementById("citation").textContent = ' " ' + this.citation[this.num] + ' " ';
        document.getElementById("author").textContent = this.author[this.num];
        document.getElementById("citation").style.opacity = "1";
        document.getElementById("citation").style.transitionDuration = "2s";
        setTimeout(function () {
            document.getElementById("citation").style.opacity = "0";
            document.getElementById("citation").style.transitionDuration = "2s";
            document.getElementById("author").style.opacity = "0";
            document.getElementById("author").style.transitionDuration = "2s";
        }, 12000);
        this.num++;
  }
};
var slider = Object.create(Slider);
setTimeout(function () {
    slider.move();
    setInterval("slider.move()", 15000);
    console.log("start");
}, 1000);


