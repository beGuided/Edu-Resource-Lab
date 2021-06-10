
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

    $department = Department::find_all();
    $material = Material::find_by_id($_GET['id']);

    if (isset($_POST['Update'])) {
        if ($material) {
            $material->material_dept_id = $_POST['material_department'];
            $material->material_title = $_POST['material_title'];
            $material->material_link = $_POST['material_link'];
            $material->material_level = $_POST['material_level'];
            $material->material_semester= $_POST['material_semester'];
            $material->material_image= 'image';

            $material->save();
        }
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
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="">
                            Edit
                            <small>Material</small>
                        </h1>

                        <form class="mt-5" action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-8 col-md-offset-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="material_title">Material title</label>
                                    <input type="text" name="material_title" class="form-control" value="<?php echo $material->material_title?>" >
                                </div>

                                <div class="form-group my-5">
                                    <label class="bmd-label-floating" for="material_link">Material link</label>
                                    <input type="text" name="material_link" class="form-control" value="<?php echo $material->material_link?>" >
                                </div>

                                <div class="form-group my-5">
                                    <label class="bmd-label-floating" for="material_department">Material department </label>
                                    <div>
                                        <select name="material_department" class="form-control text-secondary"  >
                                            <option value="" selected> Select Department</option>
                                            <?php foreach ($department as $dept):?>
                                                <option value="<?php echo $dept->id?>"><?php echo $dept->dept_title?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <!--                                    <input type="text" name="material_department" class="form-control">-->
                                </div>
                                <div class="form-group my-5">
                                    <label class="bmd-label-floating" for="material_level">Material level (select multiple by holding clt)</label>

                                        <select name="material_level"  class="form-control text-secondary" >
                                            <option value="" selected>Select Level</option>
                                            <option value="100 level">100 </option>
                                            <option value="200 level">200 </option>
                                            <option value="300 level">300 </option>
                                            <option value="400 level">400 </option>
                                        </select>

                                    <!--                                    <input type="text" name="material_level" class="form-control">-->
                                </div>
                                <div class="form-group my-5">
                                    <label class="bmd-label-floating" for="material_semester">Material semester</label>
                                    <div>
                                        <select name="material_semester" class="form-control text-secondary" >
                                            <option value="" selected>Select Semester</option>
                                            <option value="First">First </option>
                                            <option value="Second">Second </option>
                                        </select>
                                    </div>

                                </div>
                                <!--                                <div class="form-group">-->
                                <!--                                    <label for="user_image">Material image</label>-->
                                <!--                                    <input type="file" name="material_image">-->
                                <!--                                </div>-->
                                <div class="form-group my-5">
                                    <input type="submit" name="Update" value="Update" class="btn-primary pull-right">
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>


        <!--   footer  start-->

        <?php include "includes/admin_footer.php" ?>

        <!--   footer  end-->
</body>

</html>