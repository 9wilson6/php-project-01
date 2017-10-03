
<?php 
include 'configs/db.php';

$query="SELECT * FROM posts";
$results=mysqli_query($conn,$query);

$post=mysqli_fetch_all($results,MYSQLI_ASSOC);

// var_dump($post);
 ?>


<?php 

include 'inc/header.php';
include 'inc/navbar.php'
 ?>

 
 
 		
 			<p class="h1">Posts</p>
 			<?php foreach($post as $posts): ?>
 				<div class="well" style="text-align: center;">
 				<p><small class="small alert alert-danger alert-dismissable">
 					<?php echo "posted on ".$posts['date']."  "; ?>
 					<i class="font-italic">post by: <?php echo $posts['auther']; ?></i>

 				</small></p>
 				<p class="h2 alert alert-info" >
 					<?php echo $posts['title']; ?>

 					
 				</p>

 				<p  style="padding: 20px">
 				<a style="text-align: left" class="btn btn-info" href="readmore.php?id= <?php echo $posts['id']; ?>"> Read more</a>
 				
 				<a href="delete.php?id=<?php echo $posts['id'] ?>"><button style="text-align:right;" class="btn btn-danger">Delete</button></a>
 				</p>
 				
 				
 				

 				</div>


 			<?php endforeach; ?>

 		
 	</div>
 
 <?php include 'inc/footer.php' ?>