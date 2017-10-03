<?php 
$msg="";
include 'configs/db.php';
include 'inc/header.php';
include 'inc/navbar.php';
$id=$_REQUEST['id'];

$query="DELETE from posts where id='$id'";
$result=mysqli_query($conn, $query);
if ($result==true) {
	$msg='post deleted successfuly';
}
 ?>

<div class="alert alert-info"><?php echo "{$msg}"; ?></div>

 <?php 
include 'inc/footer.php';
  ?>