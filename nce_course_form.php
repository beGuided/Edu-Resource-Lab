
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

                    <input required type="text" name="Newname" name="fullname"
                            placeholder="Full Names (surname, lastname and middle name)" class="input-text">
                        <input required type="text" name="matric" placeholder="Matric Number" class="input-text">
                        <input required type="text" name="level" placeholder="Level" class="input-text">
                        <input required type="text" name="dept" placeholder="Department" class="input-text">
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

                            <img class="img-fluid logo-size logo-l mt-3" src="./assets/images/FCET.png" alt="">
                            <div class=" message-m mt-3">
                                <h5 class="sl-font mt-3 p-0">FEDERAL COLLEGE OF EDUCATION (TECHNICAL) AKOKA</h5>
                                <h5 class="sl-font"><b>COURSE REGISTRATION FORM</b></h5>
                                <h6 class="sl-font"><b class="size-d" id="dept"></b></h6>
                                <h6 class="sl-font"><b class="size-n px-1" id="level">..................</b><b class="size-n" id="semester">........................</b> <b class="size-n" id="session">..................</b></h6>
                            </div>
                        </div>
                        <div class="info-section mx-3">
                            <div class="inputs">
                            <div class="name-input">
                                    <h6>
                                        Name: <b class="size-f" id="namee">.....</b>
                                    </h6>
                                </div>
                                <div class="mat">
                                    <h6>Matric
                                        Number: <b class="size-f" id="matric">........</b>
                                    </h6>
                                </div>
                            </div>

                        </div>

                        <div class="table-section custom-n container">
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
                                            <p>STATUS</p>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                            <div id="course-item" class=" n-course-item course-item-remove">
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
                            <div class="container total-unit">
                            <span>Total Credit Unit <input required class="input-text code" type="text" name="Total credit" placeholder="Total credit unit"
                                    class="input-text border"></span></div>
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
                                        <p class="signature-text">Student's Signature & Date</p>
                                    </div>
                                    <div class="col-6">
                                        <p>........................................................................
                                        </p>
                                        <p class="signature-text">Course Advisor's Signature & Date</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-6">
                                        <p>........................................................................
                                        </p>
                                        <p class="signature-text">HOD's Signature & Date</p>
                                    </div>
                                    <div class="col-6">
                                        <p>........................................................................
                                        </p>
                                        <p class="signature-text">Dean's Signature & Date</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="n-passport">
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
<script src="js/nce_course-form.js"></script>

</body>


</html>