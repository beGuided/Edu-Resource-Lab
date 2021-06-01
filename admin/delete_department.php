<?php include("includes/init.php"); ?>
<?php

if(!$session->is_signed_in()){
    redirect("login.php");
}
?>

<?php
if(empty($_GET['id'])){
    redirect("department.php");
}

$department = Department::find_by_id($_GET['id']);
if($department){
    $department->delete();
    redirect('department.php');

}else{
    redirect("department.php");
}
?>


