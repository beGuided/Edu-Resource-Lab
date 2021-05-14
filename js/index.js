 // =============== Show Menu ================//
 // const showMenu = (toggleId, navId) => {
 //     const toggle = document.getElementById(toggleId),
 //         nav = document.getElementById(navId)
 
 //     if (toggle && nav) {
 //         toggle.addEventListener('click', () => {
 //             nav.classList.toggle('show-menu'),
 //                 toggle.classList.toggle('menu-lines')
 //         })
 //     }
 // }
 // showMenu('nav--toggle', 'nav_menu')
 
 // //===================== Change menu icon button ===========================//
 
 // const changeIcon = document.querySelector('.nav--toggle > i')
 // function change() {
 //     changeIcon.addEventListener('click', () => {
 //         changeIcon.classList.toggle('fa-close'),
 //         changeIcon.classList.toggle('fa-bars')
 //     })
 // }
 // change()
 
 
 // //===================== remove hamburger menu on link click  ===========================//
 
 // const navLink = document.querySelectorAll('.nav--link')
 // function linkAction() {
 //     const navMenu = document.getElementById('nav_menu')
 //     navMenu.classList.remove('show-menu')
 // }
 // navLink.forEach(n => n.addEventListener('click', linkAction))

 document.getElementById("dark-mode").addEventListener('click', ()=>{
     document.getElementById("nav--bg").classList.toggle("nav-bg-dark");
     document.getElementById("main-bg").classList.toggle("main-background-dark");
     document.getElementById("search--box").classList.toggle("search-box-dark");
     document.getElementById("formId").classList.toggle("reg-form-dark");
 })
 document.getElementById("dark-mode").addEventListener('click', ()=>{
     document.getElementById("formId").classList.toggle("reg-form-dark");
 })






 //  SELECT BOX TOGGLE

 document.getElementById("dark-mode").addEventListener('click', ()=>{
    document.getElementById("select--box").classList.toggle("select-box-dark");
     document.getElementById("select--box4").classList.toggle("select-box-dark");
     document.getElementById("select--box5").classList.toggle("select-box-dark");
     document.getElementById("select--box6").classList.toggle("select-box-dark");
 })
 document.getElementById("dark-mode").addEventListener('click', ()=>{
    document.getElementById("select--box1").classList.toggle("select-box-dark");
    document.getElementById("select--box2").classList.toggle("select-box-dark");
    document.getElementById("select--box3").classList.toggle("select-box-dark");
 })
 document.getElementById("dark-mode").addEventListener('click', ()=>{
    document.getElementById("select--box7").classList.toggle("select-box-dark");
    document.getElementById("select--box8").classList.toggle("select-box-dark");
    document.getElementById("select--box9").classList.toggle("select-box-dark");
    document.getElementById("select--box10").classList.toggle("select-box-dark");
 })