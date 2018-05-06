var Scroll = {
parameter : {
    block: "start",
    behavior: "smooth"
},
smooth : function () {
    document.body.scrollIntoView(Scroll.parameter);
}
};
var topPage = Object.create(Scroll);
document.getElementById("toTop").addEventListener("click", topPage.smooth);