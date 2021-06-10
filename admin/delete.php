<?php include("init.php"); ?>
<?php

if(!$session->is_signed_in()){
    redirect("login.php");
}
?>

<?php


$class= $_GET['class'];
$link=$_GET['link'];
if(empty($_GET['id']) && empty($_GET['class'])&& empty($_GET['link'])){
    redirect(strval($link));
}

$material = $class::find_by_id($_GET['id']);
if($material){
    $material->delete();
    redirect(strval($link));

}else{
    redirect(strval($link));
}
?>


