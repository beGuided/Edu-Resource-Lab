
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

    $question_dept_id=trim($_POST['question_department']);
    $question_title=trim($_POST['question_title']);
    $question_link = trim($_POST['question_link']);
    $question_level = trim($_POST['question_level']);
    $question_type= trim($_POST['question_type']);
    $question_semester=trim($_POST['question_semester']);
    $question_school=trim($_POST['question_school']);
    $question_image='image';

    $new_question = Question::create_Question($question_dept_id, $question_title, $question_link,$question_level,$question_type, $question_semester,$question_school,$question_image);
    if ($new_question && $new_question->save()) {
        redirect("add_question.php");
    } else {
        $message = "there was a problem saving ";
    }
} else {
    $question_dept_id='';
    $question_title='';
    $question_link = '';
    $question_level = '';
    $question_type='';
    $question_semester='';
    $question_school='';
    $question_image='image';

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
                            <small>Questions</small>
                        </h1>

                        <form class="mt-5" action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group my-5">
                                    <label class="bmd-label-floating"  for="question_title">Question Title</label>
                                    <input type="text" name="question_title" class="form-control" >
                                </div>

                                <div class="form-group my-5">
                                    <label class="bmd-label-floating" for="question_link">Question Link</label>
                                    <input type="text" name="question_link" class="form-control" >
                                </div>

                                <div class="form-group my-5">
                                    <label for="question_department">Question department (for degree or nce)</label>
                                    <div>
                                        <select name="question_department"   class="form-control text-secondary">
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


                                <div class="form-group">
                                    <label class="bmd-label-floating"  for="question_level">Question level </label>
                                    <div>
                                        <select name="question_level" class="form-control text-secondary">
                                                <option value="100 level">100 </option>
                                            <option value="200 level">200 </option>
                                            <option value="300 level">300 </option>
                                            <option value="400 level">400 </option>
                                        </select>
                                    </div>
<!--                                    <input type="text" name="material_level" class="form-control">-->
                                </div>
                                <div class="form-group my-5">
                                    <label class="bmd-label-floating"  for="question_type">Question Type</label>
                                    <div>
                                        <select name="question_type" class="form-control text-secondary">
                                            <option value="Exam">Exam </option>
                                            <option value="Text">Text </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group my-5">
                                    <label class="bmd-label-floating"  for="question_semester">Question Semester</label>
                                    <div>
                                        <select name="question_semester" class="form-control text-secondary">
                                            <option value="First">First </option>
                                            <option value="Second">Second </option>
                                        </select>
                                    </div>

<!--                                    <input type="text" name="material_semester" class="form-control">-->
                                </div>
                             <div class="form-group my-5">
                                    <label for="question_school">Question School</label>
                                    <div>
                                        <select name="question_school">
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