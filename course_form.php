
<?php  require_once ("includes/header.php")?>
<body id="main-bg" class="main-background">
<header>
    <!-- nav section start -->
    <?php  require_once ("includes/nav.php")?>

    <!-- nav section end -->
</header>



    <section>
        <div class="container-fluid m-auto  course-box">
            <div class="container">






                <div id="info" class=" container text-center custom-m">
                    <div class="container course-form-head">
                        <h1>Personal Information</h1>
                    </div>
                    <form id="formId" class="reg-form" action="course_form.php" method="GET">

                        <input required type="text" name="matric" placeholder="Matric Number" class="input-text">
                        <input required type="text" name="level" placeholder="Level" class="input-text">
                        <input required type="text" name="Newname" name="fullname"
                            placeholder="Full Names (surname, lastname and middle name)" class="input-text">
                        <input required type="text" name="dept" placeholder="Department" class="input-text">
                        <input required type="text" name="course" placeholder="Course of study" class="input-text">
                        <input required type="email" name="email" placeholder="Email address" class="input-text">
                        <input required type="text" name="sex" placeholder="Sex" class="input-text">
                        <input required type="tel" name="number" placeholder="Phone Number" class="input-text">
                        <input required type="text" name="semester" placeholder="Semester" class="input-text">
                        <input required type="text" name="session" placeholder="Session" class="input-text">
                    </form>

                    <button id="onit" class="btn btn-success course-btn">Move to course registration </button>
                    <div class="custom-m"></div>
                </div>


























                <!-- ================================================= -->
                <!-- ===============Course form======================= -->
                <!-- ================================================= -->
                <div id="return-btn" class="container return-btn text-center custom-m">
                    <button class="btn btn-warning course-btn">
                        < Previous page</button>
                </div>
                <div id="course--form" class="container page course-form course-form-page " size="A4">

                    <div class="container">
                        <div class="container text-center p-3 t-head">

                            <img class="img-fluid logo-size logo-l" src="./assets/images/FCET.png" alt="">
                            <img class="img-fluid logo-size logo-r" src="./assets/images/uniben.png" alt="">
                            <div class=" message-m">
                                <h5 class="sl-font m-0 p-0">FEDERAL COLLEGE OF EDUCATION (TECHNICAL) AKOKA</h5>
                                <h5 class="sl-font">IN AFFILIATION WITH THE UNIVERSITY OF BENIN</h5>
                                <h6 class="sl-font mt-2 mb-1">FACULTY OF EDUCATION</h6>
                                <h6 class="sl-font"><b>COURSE REGISTRATION FORM</b></h6>
                            </div>
                        </div>
                        <div class="info-section mx-3">
                            <div class="inputs">
                                <div class="mat">
                                    <h6 class="col-4">Matric
                                        Number: <b class="size-f" id="matric">........</b>
                                    </h6>
                                    <h6 class="col-3">
                                        Level: <b class="size-f" id="level">..................</b>
                                    </h6>
                                    <h6 class="col-3">
                                        Session: <b class="size-f" id="session">..................</b>
                                    </h6>
                                    <h6 class="col-2">
                                    </h6>
                                </div>

                                <div class="name-input">
                                    <h6>
                                        Name: <b class="size-f" id="namee">.....</b>
                                    </h6>
                                </div>
                                <h6>
                                    Department: <b class="size-f"
                                        id="dept">......................................................................................</b>
                                </h6>

                                <div class="row">
                                    <h6 class="col-7">Course of
                                        study: <b class="size-f" id="course">......................................</b>
                                    </h6>
                                    <h6 class="col-5">
                                    </h6>
                                </div>
                                </h6>
                                <div class="row">
                                    <h6 class="col-5">
                                        Email: <b class="size-f"
                                            id="yemail">..................................................</b>
                                    </h6>
                                    <h6 class="col-3">
                                        Sex: <b class="size-f" id="sex">.......................</b>
                                    </h6>
                                    <h6 class="col-4">
                                    </h6>
                                </div>
                                <div class="row">
                                    <h6 class="col-5">
                                        Phone number: <b class="size-f" id="number">............................</b>
                                    </h6>
                                    <h6 class="col-5">
                                        Semester: <b class="size-f" id="semester">........................</b>
                                    </h6>
                                    <h6 class="col-2">

                                    </h6>


                                </div>

                            </div>

                        </div>

                        <div class="table-section mt-3 container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>
                                            <p>S/N</p>
                                        </td>
                                        <td>
                                            <p>COURSE CODE</p>
                                        </td>
                                        <td>
                                            <p>COURSE TITLE</p>
                                        </td>
                                        <td>
                                            <p>CREDIT UNIT</p>
                                        </td>
                                        <td>
                                            <p>REMARK</p>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                            <div id="course-item" class=" course-item course-item-remove">
                                <input required class="input-text sn" type="text" name="seriall" placeholder="S/N"
                                    value="1" class="input-text">
                                <input required class="input-text code" type="text" name="code" placeholder="Code"
                                    class="input-text">
                                <input required class="input-text title" type="text" name="title"
                                    placeholder="Course title" class="input-text unit">
                                <input required class="input-text" type="text" name="unit" placeholder="Unit"
                                    class="input-text">
                                <input required class="input-text remark" type="text" name="remark" placeholder="Remark"
                                    class="input-text border">
                            </div>
                            <button id="add-course" class="btn btn-success course-btn">Add another Course</button>
                            <button id="print-out" class="btn btn-warning course-btn">Print</button>
                        </div>



                        <!-- =============================SIGNATURE=================== -->

                        <div class="container row text-center signature-box t-size mt-4">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <p>........................................................................
                                        </p>
                                        <p class="signature-text">Name of Student, Sign / Date</p>
                                    </div>
                                    <div class="col-6">
                                        <p>........................................................................
                                        </p>
                                        <p class="signature-text">Name of Level Advisor, Sign / Date</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-6">
                                        <p>........................................................................
                                        </p>
                                        <p class="signature-text">Name / Sign of H.O.D / Date</p>
                                    </div>
                                    <div class="col-6">
                                        <p>........................................................................
                                        </p>
                                        <p class="signature-text">Name / Sign of D.D Programme / Date</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container t-size text-center">
                                <p>Students are to make four (4) copies of the registration form to be submitted as
                                    follows:
                                    Admission - Department - Academic planning office &
                                    Students copy.</p>
                            </div>
                        </div>

                    </div>
                    <div class="passport">
                        <div class="p-box">

                            <img id="output_image" class="passport-image" \>
                            <input type="file" accept="image/*" class="btn btn-warning course-btn uploadbtn"
                                onchange="preview_image(event)">

                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-m"></div>
        </div>
    </section>

<?php  require_once("includes/footer.php")?>

<script src="js/darkMode/course-form-darkmode.js"></script>
<script src="js/course-form.js"></script>

</body>


</html>