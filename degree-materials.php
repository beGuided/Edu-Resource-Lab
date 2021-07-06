
<?php  require_once ("includes/header.php")?>
<body id="main-bg" class="main-background">
<header>
    <!-- nav section start -->
    <?php  require_once ("includes/nav.php")?>

    <!-- nav section end -->
</header>

</section>

<?php
if(empty($_GET['id'])){
    $department = Department::find_all();

}
$dept_id=$_GET['id'];
$dept_title=$_GET['title'];
$hundred='100 level';
$two_h='200 level';
$three_h='300 level';
$four_h='400 level';

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
                <a id="degree-btn" href="#" class="btn btn-outline-success fill-btn">DEGREE</a>
<!--                <a id="nce-btn" href="#" class="btn btn-outline-success">NCE</a>-->
            </div>
        </div>

        <div class=" container pt-5">
            <div class=" selection-title ">
                <h3>Select Academic Year</h3>
            </div>
        </div>

        <!-- Advert -->
        <div class="advert text-center my-5">
            <div class="container">
                <div class="ad-box">
                    <p>Advertise here!</p>
                </div>
            </div>
        </div>

        <!-- degree academic selection============== -->


        <div id="degree-academic-select" class="container text-center mt-5">
            <div class="row rowy text-center">


                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="container text-center select-contain">
                        <a href="download-materials?id=<?php echo $dept_title?>&level=<?php echo $hundred?>">
                            <div id="select--box" class="select-box select-shape">
                                <p class="text-center">Year 1 <br> STUDENT </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="container text-center select-contain">
                        <a href="download-materials.php?id=<?php echo $dept_title?>&level=<?php echo $two_h?>">
                            <div id="select--box1" class="select-box select-shape">
                                <p class="text-center">Year 2 <br> STUDENT </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                </div>
            </div>

            <div class="row rowy text-center mm">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="container text-center select-contain">
                        <a href="download-materials.php?id=<?php echo $dept_title?>&level=<?php echo $three_h?>">
                            <div id="select--box2" class="select-box select-shape">
                                <p class="text-center">Year 3 <br> STUDENT </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="container text-center select-contain">
                        <a href="download-materials.php?id=<?php echo $dept_title?>&level=<?php echo $four_h?>">
                            <div id="select--box3" class="select-box select-shape">
                                <p class="text-center">Year 4 <br> STUDENT </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                </div>
            </div>
        </div>


        <!-- NCE academic Selection================ -->


        <div id="nce-academic-select" class="course-reg-btn-hidden container text-center mt-5">
            <div class="row rowy text-center">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="container text-center select-contain">
                        <a href="#">
                            <div id="select--box4" class="select-box select-shape">
                                <p class="text-center">Year 1 <br> STUDENT </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="container text-center select-contain">
                        <a href="#">
                            <div id="select--box5" class="select-box select-shape">
                                <p class="text-center">Year 2 <br> STUDENT </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                </div>
            </div>

            <div class="row rowy text-center mm">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="container text-center select-contain">
                        <a href="#">
                            <div id="select--box6" class="select-box select-shape">
                                <p class="text-center">Year 3 <br> STUDENT </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                </div>
            </div>
        </div>


        <div class="custom-m"></div>
    </div>

</section>
<?php  require_once("includes/footer.php")?>

<script src="js/darkMode/course-material-darkmode.js"></script>
<script src="js/course-materials.js"></script>

</body>

</html>

;