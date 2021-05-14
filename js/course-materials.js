// NCE  and DEGREE button settings
function hideDegreeAcademics() {
    console.log("helo again")
    document.getElementById("nce-academic-select").classList.remove("course-reg-btn-hidden")
    document.getElementById("degree-academic-select").classList.add("course-reg-btn-hidden")
    document.getElementById("degree-btn").classList.remove("fill-btn")
    document.getElementById("nce-btn").classList.add("fill-btn")
 };
 
 document.getElementById("nce-btn").addEventListener("click", () => {
    hideDegreeAcademics();
 });
 
 function hideNceAcademics() {
    console.log("helo again")
    document.getElementById("nce-academic-select").classList.add("course-reg-btn-hidden")
    document.getElementById("degree-academic-select").classList.remove("course-reg-btn-hidden")
    document.getElementById("degree-btn").classList.add("fill-btn")
    document.getElementById("nce-btn").classList.remove("fill-btn")
 };
 
 document.getElementById("degree-btn").addEventListener("click", () => {
    hideNceAcademics();
 });
 