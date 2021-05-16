

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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
