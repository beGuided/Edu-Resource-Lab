<?php include("includes/init.php"); ?>
<?php

if(!$session->is_signed_in()){
    redirect("login.php");
}
?>

<?php
if(empty($_GET['id'])){
    redirect("class_materials.php");
}

$material = Department::find_by_id($_GET['id']);
if($material){
    $material->delete();
    redirect('class_materials.php');

}else{
    redirect("class_materials.php");
}
?>


