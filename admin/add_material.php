
<?php include "includes/admin_header.php" ?>
<!-- header end -->
<?php
if(!$session->is_signed_in()){
redirect("login.php");
}
?>
<?php
$department = Degree_Department::find_all();
$nce_department = Nce_Department::find_all();


if (isset($_POST['create'])) {

    $material_dept_id=trim($_POST['material_department']);
    $material_title=trim($_POST['material_title']);
    $material_link = trim($_POST['material_link']);
    $material_level = trim($_POST['material_level']);
    $material_semester=trim($_POST['material_semester']);
    $material_school=trim($_POST['material_school']);
    $material_image='image';

    $new_material = Material::create_material($material_dept_id, $material_title, $material_link,$material_level,$material_semester,$material_school,$material_image);
    if ($new_material && $new_material->save()) {
        redirect("add_material.php");
    } else {
        $message = "there was a problem saving ";
    }
} else {
    $material_dept_id='';
    $material_title='';
    $material_link ='';
    $material_level = '';
    $material_semester='';
    $material_school='';
    $material_image='';

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
                            Add
                            <small>Material</small>
                        </h1>

                        <form class="mt-5" action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label for="material_title">Material title</label>
                                    <input type="text" name="material_title" class="form-control" >
                                </div>

                                <div class="form-group my-5">
                                    <label for="material_link">Material link</label>
                                    <input type="text" name="material_link" class="form-control" >
                                </div>

                                <div class="form-group my-5">
                                    <label for="material_department">Material department (for degree or nce)</label>
                                    <div>
                                        <select name="material_department"   class="form-control text-secondary">
                                            <option value="" selected> select degree dept</option>
                                            <?php foreach ($department as $dept):?>
                                                <option value="<?php echo $dept->dept_title?>"><?php echo $dept->dept_title?> </option>
                                            <?php endforeach; ?>
                                            <option value=""><hr/></option>
                                            <?php foreach ($nce_department as $dept):?>
                                                <option value="<?php echo $dept->dept_title?>"><?php echo $dept->dept_title?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group my-5">
                                    <label for="material_level">Material level ()</label>
                                    <div>
                                        <select name="material_level"  class="form-control text-secondary">
                                                <option value="100 level">100 </option>
                                            <option value="200 level">200 </option>
                                            <option value="300 level">300 </option>
                                            <option value="400 level">400 </option>
                                        </select>
                                    </div>
<!--                                    <input type="text" name="material_level" class="form-control">-->
                                </div>
                                <div class="form-group my-5">
                                    <label for="material_semester">Material semester</label>
                                    <div>
                                        <select name="material_semester">
                                            <option value="First">First </option>
                                            <option value="Second">Second </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group my-5">
                                    <label for="material_school">Material School</label>
                                    <div>
                                        <select name="material_school">
                                            <option value="Degree">Degree </option>
                                            <option value="Nce">Nce </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="create" value="create" class="btn-primary pull-right">
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