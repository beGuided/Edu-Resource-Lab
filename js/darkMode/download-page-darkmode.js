
// DARK MODE =================================>

function darkToggle() {
  document.getElementById("nav--bg").classList.add("nav-bg-dark");
  document.getElementById("main-bg").classList.add("main-background-dark");
  document.getElementById("search--box").classList.add("search-box-dark");
  document.getElementById("select--box").classList.add("select-box-dark");
  document.getElementById("select--box1").classList.add("select-box-dark");
  document.getElementById("select--box2").classList.add("select-box-dark");
  document.getElementById("select--box3").classList.add("select-box-dark");
  document.getElementById("select--box4").classList.add("select-box-dark");
  document.getElementById("select--box5").classList.add("select-box-dark");
  document.getElementById("mode--toggle1").classList.remove("mode-toggle-hide");
  document.getElementById("mode--toggle").classList.add("mode-toggle-hide");
  document.getElementById("footer--bg").classList.add("footer-bg-dark");
}

function removeDarkToggle() {
  document.getElementById("nav--bg").classList.remove("nav-bg-dark");
  document.getElementById("main-bg").classList.remove("main-background-dark");
  document.getElementById("search--box").classList.remove("search-box-dark");
  document.getElementById("select--box").classList.remove("select-box-dark");
  document.getElementById("select--box1").classList.remove("select-box-dark");
  document.getElementById("select--box2").classList.remove("select-box-dark");
  document.getElementById("select--box3").classList.remove("select-box-dark");
  document.getElementById("select--box4").classList.remove("select-box-dark");
  document.getElementById("select--box5").classList.remove("select-box-dark");
  document.getElementById("mode--toggle1").classList.add("mode-toggle-hide");
  document.getElementById("mode--toggle").classList.remove("mode-toggle-hide");
  document.getElementById("footer--bg").classList.remove("footer-bg-dark");

}


let darkMode = localStorage.getItem("darkMode");
const darkModeToggle = document.querySelector("#dark-mode");

// check if darkmode is enabled
//if darkmode is enabled, turn it off
//if darkmode is disabled, turn it on


const enableDarkMode = () => {
  darkToggle();
  // addFormDarkToggle();
  // update local storage
  localStorage.setItem("darkMode", "enabled");
}

const disableDarkMode = () => {
  removeDarkToggle();
  // removeFormDarkToggle();
  // update local storage
  localStorage.setItem("darkMode", null);
}


if (darkMode === "enabled") {
  enableDarkMode();
}

darkModeToggle.addEventListener("click", () => {

  darkMode = localStorage.getItem("darkMode");

 
  if (darkMode !== "enabled") {
    enableDarkMode();
    console.log(darkMode);
  } else {
    disableDarkMode();
    console.log(darkMode);
  }
})



