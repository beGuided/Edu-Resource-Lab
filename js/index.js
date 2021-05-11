
//============= Personal info section =====================//
document.getElementById("onit").addEventListener("click", () => {

   const formIdd = document.getElementById("formId").elements
   //declaring variable to get personal info data from input
   var a = formIdd.namedItem("matric").value;
   var b = formIdd.namedItem("level").value;
   var c = formIdd.namedItem("Newname").value;
   var d = formIdd.namedItem("dept").value;
   var e = formIdd.namedItem("course").value;
   var f = formIdd.namedItem("email").value;
   var g = formIdd.namedItem("sex").value;
   var h = formIdd.namedItem("number").value;
   var i = formIdd.namedItem("semester").value;
   var j = formIdd.namedItem("session").value;

   matric.innerText = a;
   yLevel.innerText = b;
   fullName.innerText = c;
   dept.innerText = d;
   course.innerText = e;
   yEmail.innerText = f;
   sex.innerText = g;
   phoneNo.innerText = h;
   semester.innerText = i;
   session.innerText = j;

   //calling function
   previewCourseForm();
})

//Personal info DOM variables
const fullName = document.getElementById("namee");
const matric = document.getElementById("matric");
const dept = document.getElementById("dept");
const phoneNo = document.getElementById("number");
const sex = document.getElementById("sex");
const yEmail = document.getElementById("yemail");
const session = document.getElementById("session");
const semester = document.getElementById("semester");
const course = document.getElementById("course");
const yLevel = document.getElementById("level");


//============= Course form section =====================//

//function to preview courseform by removing and adding classes
function previewCourseForm() {
   document.getElementById("course--form").classList.remove("course-form")
   document.getElementById("return-btn").classList.remove("return-btn")
   document.getElementById("info").classList.add("info")
};

//the return button. to remove and add classes
document.getElementById("return-btn").addEventListener("click", () => {

   document.getElementById("course--form").classList.add("course-form")
   document.getElementById("return-btn").classList.add("return-btn")
   document.getElementById("info").classList.remove("info")
});


function printOut () {
   window.print();
}

$(document).ready(function () {


   $("#add-course").click(function (e) {
      console.log("workiiiiiiiiiiiiing");
      $('#course-item').append('<div id="course-item " class="m-s course-item course-item-remove"><input required class="input-text sn" type="text" name="seriall" placeholder="S/N" value="1" class="input-text">'
         + '<input required class="input-text code" type="text" name="code" placeholder="Code" class="input-text">'
         + '  <input required class="input-text title" type="text" name="title"placeholder="Course title" class="input-text unit">'
         + ' <input required class="input-text" type="text" name="unit"placeholder="Unit" class="input-text">'
         + '  <input required class="input-text remark" type="text" name="remark" placeholder="Remark" class="input-text">'
         + ' <button id="remove-course" class=" btn btn-danger course-reg-btn">x</button></div>'
      );
   });

   $("body").on('click', '#remove-course', function (e) {
      $(this).parent('div').remove();
   });
   $('body').on('click', '#print-out', function (e) {
      $('div').removeClass('course-item');
      // $('button').removeClass('course-reg-btn btn btn-danger');
      printOut();
   });

});


 
// Passport upload



  function preview_image(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output_image');
      output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
  }


















// window.addEventListener('load', function() {
//    document.querySelector('input[type="file"]').addEventListener('change', function() {
//        if (this.files && this.files[0]) {
//            var img = document.querySelector('img');
//            img.onload = () => {
//                URL.revokeObjectURL(img.src);  // no longer needed, free memory
//            }
 
//            img.src = URL.createObjectURL(this.files[0]); // set src to blob url
//        }
//    });
//  });













// const imgDiv = document.getElementsByClassName('passport');
// const img = document.getElementById('photo');
// const filee = document.getElementById('file');
// const uploadBtn = document.getElementById('uploadbtn');

// filee.addEventListener('change', ()=>{
//     const chooseFile = this.files[0];

//     if (chooseFile) {
//        const reader = new FileReader();
//        reader.addEventListener('load', ()=>{
//           img.setAttribute('src', reader.result);
//        });

//        reader.readAsDataURL(chooseFile);
//     }
// })

















// const courseReg = document.getElementById("course-reg");
// const courseAdd = document.getElementById("add");

// function addCourse(e) {
//    e.preventDefault();
//    const tbody = document.querySelector("addtable");
//    const sn = courseReg.elements.namedItem("serial").value;
//    // alert(sn);
//    console.log("working");
//    let template =`
//    <tr>
//          <td>${sn}</td>
//          <td></td>
//          <td></td>
//          <td></td>
//          <td></td>
//       </tr>
//       `;
//    tbody.innerHTML += template;

// };

// courseReg.addEventListener("click", addCourse);
// courseAdd.addEventListener("click", ()=> {

//    const tbody = document.querySelector("addtable");
//    const sn = courseReg.elements.namedItem("serial").value;
//    // alert(sn);
//    console.log("working");
//    let template =`
//    <tr>
//          <td>${sn}</td>
//          <td></td>
//          <td></td>
//          <td></td>
//          <td></td>
//       </tr>
//       `;
//    tbody.innerHTML += template;
// });

// // document.getElementById("add").addEventListener("click", () => {

// //    const sn = document.getElementById("course-reg").elements.namedItem("serial").value;
// //    alert(sn);
// //    console.log("working");
// // })































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
