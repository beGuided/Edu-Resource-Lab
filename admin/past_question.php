<!-- header  start-->

<?php include "includes/admin_header.php" ?>
<!-- header end -->

<body class="dark-edition">
<div class="wrapper ">
    <!-- Sidebar  -->
    <?php include "includes/sidebar.php" ?>

    <!--End  Sidebar  -->

    <div class="main-panel">

        <!-- Navbar -->

        <?php include "includes/admin_navbar.php" ?>

        <?php
        $questions = Question::find_all();
        ?>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--                        Add new button-->
                        <a href="add_question.php">  <button class="btn btn-success"> ADD NEW</button></a>

                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title "> Manage Questions</h4>
                                <p class="card-category"> view details</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>Question image</th>
                                        <th>ID</th>
                                        <th>Question Title</th>
                                        <th>Question Link</th>
                                        <th>Question Dept</th>
                                        <th>Question Semester</th>
                                        <th>Question Level</th>
                                        <th>Question Type</th>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($questions as $question):?>
                                            <tr>
                                                <td>image
                                                    <div >
                                                        <a class="text-primary" href="delete.php?id=<?php echo $question->id?>&class=Question&link=past_question.php">Delete</a>
                                                        <a class="text-primary" href="edit_question.php?id=<?php echo $question->id?>">Edit</a>
                                                        <a class="text-primary" href=".php?id=<?php echo $question->id?>">View</a>
                                                    </div>
                                                </td>
                                                <td><?php echo $question->id?></td>
                                                <td><?php echo $question->question_title?></td>
                                                <td><?php echo $question->question_link?></td>
                                                <td><?php echo $question->question_dept_id?></td>
                                                <td><?php echo $question->question_semester?></td>
                                                <td><?php echo $question->question_level?></td>
                                                <td><?php echo $question->question_type?></td>
                                            </tr>
                                        <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--   footer  start-->

                    <?php include "includes/admin_footer.php" ?>

                    <!--   footer  end-->
</body>

</html>