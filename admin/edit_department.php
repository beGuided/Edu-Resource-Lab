
<?php include "includes/admin_header.php" ?>
<!-- header end -->
<?php
if(!$session->is_signed_in()){
    redirect("login.php");
}
?>
<?php
if(empty($_GET['id'])) {
    redirect("class_material.php");
}

    $department = Degree_Department::find_by_id($_GET['id']);

    if (isset($_POST['Update'])) {

            $department->dept_title = $_POST['dept_title'];
            $department->save();
            redirect('department.php');
        }



//$material = Material::find_the_material(1);


?>


<body class="dark-edition">
<div class="wrapper ">
    <!-- Sidebar  -->
    <?php include "includes/sidebar.php" ?>

    <!--End  Sidebar  -->

    <div class="main-panel">

        <!-- Navbar -->

        <?php include "includes/admin_navbar.php" ?>
        <!-- End Navbar -->
        <div class="content">
            <form action="" method="post">
                <div class="form-group">
                    <label for="cat_title">Add Department</label><br>
                    <input class="form-control" type="text" name="dept_title" value="<?php echo $department->dept_title?>">
                </div>
                <div class="form-group">
                    <input class="btn-success" type="submit" name="Update" value="Update">
                </div>
            </form>
        </div> <!-- add category form -->

        <!-- /.row -->
            </div>
        </div>


        <!--   footer  start-->

        <?php include "includes/admin_footer.php" ?>

        <!--   footer  end-->
</body>

</html>