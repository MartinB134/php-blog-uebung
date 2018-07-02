<?php

include 'includes/header.php';

?>

<?php 

//ID Variable from the URL at the action href
$id = $_GET['id'];

//Create Database
 
 $db = new Database();

//Create Query
 $query= "SELECT * FROM posts WHERE id =".$id;
 //Run Query

 $post= $db-> select ($query)->fetch_assoc();
?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>

              <p class="blog-post-meta"><?php echo formatDate($post['timestamp']); ?> by <a href="#"><?php echo $post['author']; ?></a></p>
     
                  <?php echo $post['body']; ?>
           </div>
   
   <?php include 'includes/footer.php' ?>