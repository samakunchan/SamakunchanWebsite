var Slider = {
    num : 0,
    citation: ["Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés.",
        "Dans la vie on ne fait pas ce que l'on veut mais on est responsable de ce que l'on est.",
        "Choisissez un travail que vous aimez et vous n'aurez pas à travailler un seul jour de votre vie.",
    "Quand on vous demande si vous êtes capable de faire un travail répondez : \"bien sûr, je peux !\" Puis débrouillez-vous pour y arriver."],
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


