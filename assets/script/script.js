console.log("Connexion Script");
const c = document.querySelectorAll(".c");
const contInfoCards = document.querySelectorAll(".contInfoCard");
const btnMenuBurger = document.querySelector("#btnMenuBurger");
const menuBurger = document.querySelector(".menuBurger");
const links = document.querySelectorAll(".link");
const imgSrcs = document.querySelectorAll(".hero img");

menuBurger.classList.add("hiddenMenuBurger");

btnMenuBurger.addEventListener("click", () => {
  menuBurger.classList.contains("hiddenMenuBurger")
    ? (menuBurger.classList.remove("hiddenMenuBurger"),
      btnMenuBurger.classList.add("fa-x"))
    : (menuBurger.classList.add("hiddenMenuBurger"),
      btnMenuBurger.classList.remove("fa-x"));
});

for (let link of links) {
  link.addEventListener("click", () => {
    menuBurger.classList.add("hiddenMenuBurger");
    btnMenuBurger.classList.remove("fa-x");
  });
}

let i = 0;

c[0].style.backgroundColor = "goldenrod";

let cardsNumber = 6;
let duration = 5000;

addEventListener("load", () => {
  setInterval(() => {
    i = (i + 1) % 6;
    for (let j = 0; j <= c.length - 1; j++) {
      c[j].style.backgroundColor = j === i ? "goldenrod" : "rgb(129, 129, 129)";
    }

    imgSrcs[0].src = imgSrcs[i + 1].src;
  }, duration);
});

console.log("\nFin");
