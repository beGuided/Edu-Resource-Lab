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
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <p class="btn btn-success"> <a href="">ADD NEW</a></p>
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title "> Manage Past Questions</h4>
                                <p class="card-category"> view details</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>Material image</th>
                                        <th>ID</th>
                                        <th>Material Title</th>
                                        <th>Material Link</th>
                                        <th>Material Department</th>
                                        <th>Material semester</th>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>image</td>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>Oud-Turnhout</td>
                                            <td>Oud-Turnhout
                                                <div >
                                                    <a class="text-primary" href="">Delete</a>
                                                    <a class="text-primary" href="">Edit</a>
                                                    <a class="text-primary" href="">View</a>
                                                </div>
                                            </td>
                                            <td class="text-primary">$36,738</td>
                                        </tr>

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