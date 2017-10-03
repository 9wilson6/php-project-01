<?php 
include 'configs/db.php';
$msg="";
$id=mysqli_escape_string($conn,$_REQUEST['id']);
$query="SELECT * FROM posts WHERE id=".$id;
$results=mysqli_query($conn,$query);

$post=mysqli_fetch_assoc($results);


 ?>


<?php 

include 'inc/header.php';
include 'inc/navbar.php'
 ?>
<?php 
$msg="";
$class="";
if (isset($_POST['submit'])) {
	$auther=$_POST['auther'];
	$title=$_POST['tittle'];
	$message=$_POST['message'];
	if (!empty($auther) && !empty($title) && !empty($message) ) {
		# code...
		# 
		$sql="UPDATE posts set auther='$auther', title='$title', message='$message' where id ='$id'";
		$result=mysqli_query($conn,$sql);
		if ($result) {
			header('location: index.php');
		}else{

			$msg=mysqli_error($conn);
		$class="alert alert-danger";
		}
		
	}else{

		$msg="empty fields ditected....";
		$class="alert alert-danger";
	}
}
 ?>
 
<div class= "well well-sm" style="padding: 10%">


 			<form class="form-horizontal" action="edit.php? id= <?php echo $id ?>  " method="post">
 				 			<p class="<?php echo "{$class}"; ?>">
 				<?php echo "{$msg}"; ?>
 			</p>
 			<div class="form-group">
 			<label for="auther">Auther:</label>
 			<input class="form-control" type="text" name="auther" id="auther" value="<?php echo $post['auther'] ?> ">
 			</div>

 			<div class="form-group">
 			<label for="tittle">Tittle:</label>
 			<input class="form-control" type="text" name="tittle" id="tittle" value="<?php echo $post['title']; ?>" >
 			</div>
 			<div class="form-group">
 			<label for="message">Message:</label>
 			<textarea name="message" id="message" cols="20" rows="10" class="form-control" > <?php echo  $post['message'] ?></textarea>
 			</div>
 			<div class="form-group">
 			
 			<input class="btn btn-info" type="submit" name="submit" >
 			</div>

 		</form>
 	
 		</div>
 <?php include 'inc/footer.php' ?>