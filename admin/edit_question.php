
<?php include "includes/admin_header.php" ?>
<!-- header end -->
<?php
if(!$session->is_signed_in()){
    redirect("login.php");
}
?>
<?php
if(empty($_GET['id'])) {
    redirect("past_question.php");
}

    $department = Department::find_all();
    $question = Question::find_by_id($_GET['id']);

    if (isset($_POST['Update'])) {
        if ($question) {
            $question->question_dept_id = $_POST['question_department'];
            $question->question_title = $_POST['question_title'];
            $question->question_link = $_POST['question_link'];
            $question->question_level = $_POST['question_level'];
            $question->question_semester= $_POST['question_semester'];
            $question->question_type= $_POST['question_type'];
            $question->questionl_image= 'image';

            $question->save();
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
                            <small>Question</small>
                        </h1>

                        <form class="mt-5" action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-8 col-md-offset-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="question_title">Question title</label>
                                    <input type="text" name="question_title" class="form-control" value="<?php echo $question->question_title?>" >
                                </div>

                                <div class="form-group my-5">
                                    <label class="bmd-label-floating" for="question_link">Question link</label>
                                    <input type="text" name="question_link" class="form-control" value="<?php echo $question->question_link?>" >
                                </div>

                                <div class="form-group my-5">
                                    <label class="bmd-label-floating" for="question_department">Question department </label>
                                    <div>
                                        <select name="question_department" class="form-control text-secondary" >
                                            <option value="" selected>Select Department</option>
                                            <?php foreach ($department as $dept):?>
                                                <option value="<?php echo $dept->id?>"><?php echo $dept->dept_title?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <!--                                    <input type="text" name="material_department" class="form-control">-->
                                </div>
                                <div class="form-group my-5">
                                    <label class="bmd-label-floating" for="question_level">Question level </label>
                                    <div>
                                        <select name="question_level"  class="form-control text-secondary" >
                                            <option value="" selected>Select Level</option>
                                            <option value="100 level">100 </option>
                                            <option value="200 level">200 </option>
                                            <option value="300 level">300 </option>
                                            <option value="400 level">400 </option>
                                        </select>
                                    </div>
                                    <!--                                    <input type="text" name="material_level" class="form-control">-->
                                </div>
                                <div class="form-group my-5">
                                    <label class="bmd-label-floating" for="question_semester">Question semester</label>
                                    <div>
                                        <select name="question_semester" class="form-control text-secondary" >
                                            <option value="First">First </option>
                                            <option value="Second">Second </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group my-5">
                                    <label class="bmd-label-floating"  for="question_type">Question Type</label>
                                    <div>
                                        <select name="question_type" class="form-control text-secondary" >
                                            <option value="" selected>Select Semester</option>
                                            <option value="Exam">Exam </option>
                                            <option value="Test">Test </option>
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