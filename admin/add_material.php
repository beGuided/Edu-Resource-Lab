<!-- header  start-->

<?php include "includes/admin_header.php" ?>
<!-- header end -->
<?php
if(!$session->is_signed_in()){
redirect("login.php");
}
?>
<?php
$photo = Photo::find_by_id(4);


if (isset($_POST['submit'])) {
    $author = trim($_POST['author']);
    $body = trim($_POST['body']);

    $new_comment = Comment::create_comment($photo->id, $author, $body);
    if ($new_comment && $new_comment->save()) {
        redirect("pictures.php?id=$photo->id");
    } else {

        $message = "there was a problem saving ";
    }
} else {
    $author = "";
    $body = "";
}
$comments = Comment::find_the_comment($photo->id);


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
                            Photos
                            <small>Subheading</small>
                        </h1>

                        <form class="mt-5" action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label for="first_name">Material title</label>
                                    <input type="text" name="first_name" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="last_name">Material link</label>
                                    <input type="text" name="last_name" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="username">Material department</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Material level</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="user_image">Material semester</label>
                                    <input type="password" name="password" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="user_image">Material image</label>
                                    <input type="file" name="user_image">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="create" class="btn-primary pull-right">
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