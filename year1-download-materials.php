<?php  require_once ("includes/header.php")?>
<body id="main-bg" class="main-background">
<header>
    <!-- nav section start -->
    <?php  require_once ("includes/nav.php")?>

    <!-- nav section end -->
</header>


    </section>
<?php
if(empty($_GET['id'])) {
    redirect("index.php");

}

$dept_level=$_GET['level'];
$dept_title=$_GET['id'];
$resource_semester='first';
$Exam_type='Exam';
$Test_type='Test';



$fist_sem_material = Material::find_the_material_first($dept_title, $dept_level,$resource_semester);
$second_sem_material = Material::find_the_material_second($dept_title, $dept_level,$resource_semester);

//gather all text and exam question for each level and semester,

$first_semester= Question::first_semester($dept_title, $dept_level, $Exam_type, $resource_semester);
$second_semester= Question::second_semester($dept_title, $dept_level, $Exam_type,$resource_semester);


$question_by_Test= Question::question_by_Test($dept_title, $dept_level, $Test_type,$resource_semester );
$question_by_Test_second= Question::question_by_Test_second($dept_title, $dept_level, $Test_type,$resource_semester );





?>


    <section>

        <div class="container-fluid">

            <div class="container custom-m2">

                <!-- search -->
                <div class="container search">
                    <div id="search--box" class="search-box">
                        <input type="search" name="" id="input" class="form-control" placeholder="Looking for?"
                            title="">
                        <a href="#" class="btn btn-warning"><img class="mode-toggle" src="./assets/images/search.png" alt=""></a>
                    </div>
                </div>
                <div class="btn-contain">
                    <a href="year1-degree-materials.php" class="btn btn-outline-success">
                        < PREVIOUS PAGE</a>
                </div>
            </div>

            <div class=" container pt-5">
                <div class=" selection-title ">
                    <h3>Download Documents</h3>
                </div>
            </div>

            <!-- Advert -->
            <div class="horizontal-advert my-5 text-center">
                <div class="container">
                    <div class="ad-box">
                        <p>Advertise here!</p>
                    </div>
                </div>
            </div>


            <!-- 1st SEMESTER SECTION============== -->


            <div id="degree-academic-select" class="container text-center mb-5">
                <div class="semester">
                    <p>1st Semester</p>
                </div>
                <div class="row rowb text-center">

                    <?php foreach ($first_semester as $question):?>
                    <div id="row-m" class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                        <div class="container text-center select-contain">
                           <a href="../www.<?php echo $question->question_link?>">
                                <div id="select--box" class="select-box download-select-shape">
                                    <div class="row">
                                        <div class="col-12">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12">
                                            <p class="text-center">Exam past <br> Questions </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach;?>
                    </div>


                    <div id="row-m" class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                        <?php foreach ($question_by_Test as $question):?>
                        <div class="container text-center select-contain">
                            <a href="../www.<?php echo $question->question_link?>">
                                <div id="select--box1" class="select-box download-select-shape">
                                    <div class="row">
                                        <div class="col-12">
                                            <i class="fa fa-folder-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12">
                                            <p class="text-center">Test past <br> Questions </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach;?>
                    </div>


                    <div id="row-m" class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                        <?php foreach ($fist_sem_material as $material):?>
                        <div class="container text-center select-contain">
                            <a href="../www.<?php echo $material->material_link?>">
                                <div id="select--box2" class="select-box download-select-shape">
                                    <div class="row">
                                        <div class="col-12">
                                            <i class="fa fa-folder-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12">
                                            <p class="text-center">Course notes<br> and Handouts </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach;?>
                    </div>



                </div>
            </div>


            <!-- 2nd SEMESTER SECTION============== -->


            <div id="degree-academic-select" class="container text-center mt-5">
                <div class="semester">
                    <p>2nd Semester</p>
                </div>
                <div class="row text-center">

                    <div id="row-m" class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                        <?php foreach ($second_semester as $question):?>
                        <div class="container text-center select-contain">
                            <a href="../www.<?php echo $question->question_link?>">
                                <div id="select--box3" class="select-box download-select-shape">
                                    <div class="row">
                                        <div class="col-12">
                                            <i class="fa fa-folder-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12">
                                            <p class="text-center">Exam past <br> Questions </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach;?>
                    </div>


                    <div id="row-m" class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                        <?php foreach ($question_by_Test_second as $question):?>
                        <div class="container text-center select-contain">
                            <a href="../www.<?php echo $question->question_link?>">
                                <div id="select--box4" class="select-box download-select-shape">
                                    <div class="row">
                                        <div class="col-12">
                                            <i class="fa fa-folder-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12">
                                            <p class="text-center">Test past <br> Questions </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach;?>
                    </div>

                    <div id="row-m" class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                        <?php foreach ($second_sem_material as $material):?>
                        <div class="container text-center select-contain">
                            <a href="../www.<?php echo $material->material_link?>">
                                <div id="select--box5" class="select-box download-select-shape">
                                    <div class="row">
                                        <div class="col-12">
                                            <i class="fa fa-folder-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12">
                                            <p class="text-center">Course notes<br> and Handouts </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach;?>
                    </div>


                </div>



            </div>
        </div>


        </div>

        <div class="custom-m"></div>


        </div>

    </section>






    </div>


<?php  require_once ("includes/footer.php")?>
<script src="js/darkMode/about-page-darkmode.js"></script>
</body>

</html>