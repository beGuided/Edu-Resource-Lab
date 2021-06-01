<?php include "includes/admin_header.php" ?>
<!-- header end -->

<body class="dark-edition">
<div class="wrapper ">
    <!-- Sidebar  -->
    <?php include "includes/sidebar.php" ?>

    <?php
    $department = Department::find_all();

    if (isset($_POST['submit'])) {
        $dept_title = trim($_POST['dept_title']);

        $new_dept = Department::create_department( $dept_title);
        if ($new_dept && $new_dept->save()) {
            redirect("department.php");
        } else {

            $message = "there was a problem saving ";
        }
   }
    // else {
//        $author = "";
//        $body = "";
//    }
    ?>
    <!--End  Sidebar  -->
    <div class="main-panel">

        <!-- Navbar -->
        <?php include "includes/admin_navbar.php" ?>
        <!-- End Navbar -->
        <div class="content">

                <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1 >
                               Department
                            </h1>

                            <div class="col-md-6 mt-5">
                                <?php
                                ?>

                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="cat_title">Add Department</label><br>
                                        <input class="form-control" type="text" name="dept_title">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn-success" type="submit" name="submit" value="Add Department">
                                    </div>
                                </form>
                            </div> <!-- add category form -->


                            <div class="col-md-6 mt-4">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Department Title</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($department as $dept):?>
                                    <tr>
                                        <td><?php echo $dept->id?></td>
                                        <td><?php echo $dept->dept_title?>
                                            <div class="actions_link">
                                                <a  href="delete_department.php?id=<?php echo $dept->id?>">Delete</a>
                                                <a href="delete_comment.php?id=<?php echo $dept->id?>">Edit</a>

                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- edit category form -->

                        </div>
                    </div>
                    <!-- /.row -->

                </div>

        <!--   footer  start-->

        <?php include "includes/admin_footer.php" ?>

        <!--   footer  end-->
</body>

</html>