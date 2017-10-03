
<?php 
include 'configs/db.php';
$msg="";
$class="";
if (isset($_POST['submit'])) {

	$auther=mysqli_escape_string($conn, $_POST['auther']);

	$tittle=mysqli_escape_string($conn, $_POST['tittle']); 

	$message=mysqli_escape_string($conn, $_POST['message']);

	if ($auther!="" && $tittle!="" && $message!="") {
		$query="INSERT into posts(auther, title, message) Values('$auther','$tittle','$message')";
		$results=mysqli_query($conn,$query);
		if ($results) {
			$msg="post successfuly added";
			$class="alert alert-success";
		}else{
			
			
		}
	}else{

		$msg="Failed to add post";
			$class="alert alert-danger";
		
	}

}


 ?>


<?php 

include 'inc/header.php';
include 'inc/navbar.php'
 ?>


 		<div class= "well well-sm" style="padding: 10%">

 			<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
 				 			<p class="<?php echo "{$class}"; ?>">
 				<?php echo "{$msg}"; ?>
 			</p>
 			<div class="form-group">
 			<label for="auther">Auther:</label>
 			<input class="form-control" type="text" name="auther" id="auther" >
 			</div>

 			<div class="form-group">
 			<label for="tittle">Tittle:</label>
 			<input class="form-control" type="text" name="tittle" id="tittle" >
 			</div>
 			<div class="form-group">
 			<label for="message">Message:</label>
 			<textarea name="message" id="message" cols="20" rows="10" class="form-control"></textarea>
 			</div>
 			<div class="form-group">
 			
 			<input class="btn btn-info" type="submit" name="submit" >
 			</div>

 		</form>
 	
 		</div>
 
 <?php include 'inc/footer.php' ?>