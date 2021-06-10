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
        $materials = Material::find_all();
        ?>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
<!--                        Add new button-->
                        <a href="add_material.php"><button class="btn btn-success"> ADD NEW</button></a>

                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title "> Manage materials</h4>
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
                                        <th>Material Dept</th>
                                        <th>Material Semester</th>
                                        <th>Material Level</th>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($materials as $material):?>
                                        <tr>
                                            <td>image
                                                <div >
                                                    <a class="text-primary" href="delete.php?id=<?php echo $material->id?>&class=Material&link=class_materials.php">Delete</a>
                                                    <a class="text-primary" href="edit_material.php?id=<?php echo $material->id?>">Edit</a>
                                                    <a class="text-primary" href=".php?id=<?php echo $material->id?>">View</a>
                                                </div>
                                            </td>
                                            <td><?php echo $material->id?></td>
                                            <td><?php echo $material->material_title?></td>
                                            <td><?php echo $material->material_link?></td>
                                            <td><?php echo $material->material_dept_id?></td>
                                            <td><?php echo $material->material_semester?></td>
                                            <td><?php echo $material->material_level?></td>
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