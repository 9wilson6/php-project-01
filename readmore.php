<?php 
include 'configs/db.php';
$id=mysqli_escape_string($conn,$_REQUEST['id']);
$query="SELECT * FROM posts WHERE id=".$id;
$results=mysqli_query($conn,$query);

$post=mysqli_fetch_assoc($results);


 ?>


<?php 

include 'inc/header.php';
include 'inc/navbar.php'
 ?>

 

 		
 			<p class="h1">Posts</p>
 			
 				<div class="well" style="text-align: center;">
 				<p><small class="small alert alert-danger alert-dismissable">
 					<?php echo "posted on ".$post['date']; ?>
 					<i class="font-italic">post by: <?php echo $post['auther']; ?></i>

 				</small></p>
 				<p class="h2 alert alert-info" >
 					<?php echo $post['title']; ?>
 				</p>
 				<p class="lead h3">
 					<?php echo $post['message']; ?>
 				</p>
 				<a href="<?php echo ROOT_URL ?>" class="btn btn-info">Back</a>
 				<a style="text-align: left" class="btn btn-info" href="edit.php?id=<?php echo $post['id']; ?>">Edit</a>
 				</div>


 			

 		
 	</div>
 </body>
 <?php include 'inc/footer.php' ?>