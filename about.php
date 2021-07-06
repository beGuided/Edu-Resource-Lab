<?php  require_once ("includes/header.php")?>
<body id="main-bg" class="main-background">
<header>
    <!-- nav section start -->
    <?php  require_once ("includes/nav.php")?>

    <!-- nav section end -->
</header>
    <div class="container custom-m2">

        <!-- search -->
        <div class="container search">
            <div id="search--box" class="search-box">
                <input type="search" name="" id="input" class="form-control" placeholder="Looking for?" title="">
                <a href="#" class="btn btn-warning"><img class="mode-toggle" src="./assets/images/search.png" alt=""></a>
            </div>
        </div>
    </div>

    <div class=" container pt-2">
        <div class=" selection-title ">
            <h3>About Us</h3>
        </div>
    </div>

    <!-- Advert -->
    <div class="horizontal-advert my-5 text-center advert-big">
       <a href="advert.php" target="_blank" rel="noopener noreferrer">
            <div class="ad-box">
                <img class="img-fluid" src="./assets/images/advert-space.png" alt="">
            </div>
       </a>
    </div>
    <!-- Advert-sm -->
    <div class="horizontal-advert my-5 text-center advert-sm">
       <a href="advert.php" target="_blank" rel="noopener noreferrer">
            <div class="ad-box">
                <img class="img-fluid" src="./assets/images/advert-space-sm.png" alt="">
            </div>
       </a>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="container row about-content">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 info-box">
                    <p class="">
                    <h4>Edu Resource lab</h4> is an online academic resource platform for students in different levels and departments
                     in their various higher institution. <br> <br> Edu Resource Lab has amazing features for higher institution which above others are Course
                    materials and resources, Course form generation and many more. <br> <br> Edu Resource Lab is currently available to a few Academic institutions
                     which we upload and update course materials regularly to meet student needs.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-img img-fluid">
                        <img src="./assets/images/about.png" alt="">
                    </div>
                </div>
            </div>
            <div class="custom-m"></div>
        </div>
    </div>
<?php  require_once("includes/footer.php")?>


<script src="js/darkMode/about-page-darkmode.js"></script>

</body>

</html>