

<?php  require_once ("includes/header.php")?>
<body id="main-bg" class="main-background">
<header>
    <!-- nav section start -->
    <?php  require_once ("includes/nav.php")?>

    <!-- nav section end -->
</header>

</section>

<section>
    <?php
    if(empty($_GET['id'])){
        $department = Department::find_all();

    }
    ?>
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
                <a href="course-materials.php" class="btn btn-outline-success">
                    < PREVIOUS PAGE</a>
            </div>
        </div>

        <div class=" container pt-5">
            <div class=" selection-title ">
                <h3>Select Department</h3>
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


        <!-- degree academic selection============== -->

        <div id="degree-academic-select" class="container text-center">
            <div class="row text-center">

                <?php

                if($department) {
                    foreach ($department as $dept):
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                            <div class="container text-center select-contain">
                                <a href="year1-degree-materials.php?id=<?php echo $dept->id?>&title=<?php echo $dept->dept_title?>">
                                    <div id="select--box1" class="select-box d-select-shape">
                                        <p class="text-center"><?php echo $dept->dept_title?><br> Department </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php
                    endforeach;
                } else {

                    echo "<h2 class='text-center'> No department uploaded! </h2>";
                }

                ?>


            </div>
        </div>
    </div>


    </div>

    <div class="custom-m"></div>


    </div>

</section>


</div>


<?php  require_once ("includes/footer.php")?>
<script src="js/department-darkmode.js"></script>

</body>
</body>

</html>