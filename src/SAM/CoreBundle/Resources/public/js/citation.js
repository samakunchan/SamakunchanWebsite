var Slider = {
    num : 0,
    citation: ["Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés.",
        "Dans la vie on ne fait pas ce que l'on veut mais on est responsable de ce que l'on est.",
        "Choisissez un travail que vous aimez et vous n'aurez pas à travailler un seul jour de votre vie."],
    author: ["Confusius", "Jean Paul Sartres", "Confusius"],
    move: function () {
        setTimeout(function () {
            document.getElementById("citation").style.opacity = "1";
            document.getElementById("citation").style.transitionDuration = "2s";
            document.getElementById("author").style.opacity = "1";
            document.getElementById("author").style.transitionDuration = "2s";
        }, 1000);
        if ( this.num >= this.citation.length ) {
            this.num = 0;
        }
        document.getElementById("citation").textContent = this.citation[this.num];
        document.getElementById("author").textContent = this.author[this.num];
        document.getElementById("citation").style.opacity = "1";
        document.getElementById("citation").style.transitionDuration = "2s";
        setTimeout(function () {
            document.getElementById("citation").style.opacity = "0";
            document.getElementById("citation").style.transitionDuration = "2s";
            document.getElementById("author").style.opacity = "0";
            document.getElementById("author").style.transitionDuration = "2s";
        }, 12000);
        console.log(this.citation[this.num]);
        this.num++;
  }
};
var slider = Object.create(Slider);
document.getElementById("citation").textContent = slider.citation[0];
document.getElementById("author").textContent = slider.author[0];
setInterval("slider.move()", 15000);

