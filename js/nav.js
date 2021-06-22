
// Nav Icon Toggle =================================>

function addNavToggle() {
  document.getElementById("nav-toggler").classList.toggle("navbar-toggler-disabled");
  document.getElementById("nav-toggler2").classList.toggle("navbar-toggler-disabled");

}

function removeNavToggle() {
  document.getElementById("nav-toggler").classList.toggle("navbar-toggler-disabled");
  document.getElementById("nav-toggler2").classList.toggle("navbar-toggler-disabled");
}

const navToggle = document.querySelector("#nav-toggler");
const navToggleTwo = document.querySelector("#nav-toggler2");


navToggle.addEventListener("click", () => {
addNavToggle();
})

navToggleTwo.addEventListener("click", () => {
removeNavToggle();
})


