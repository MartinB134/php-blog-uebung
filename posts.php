<?php
include 'includes/header.php';

 //Create Database
  $db = new Database();

//Check URL for Category
 if(isset($_GET['category'])){
  $category = $_GET['category'];
  //Create Query
 $query= "SELECT * FROM posts WHERE category =".$category;
  //Run Query
 $posts= $db-> select ($query);
} else {
	//CREATE Query
	$query = "SELECT * FROM posts";
	//Run Query
	$posts = $db->select($query);
}


//Create Featured Post
 $query_feat= "SELECT * FROM posts WHERE category=2";
 //Run Query
 $posts_feat= $db-> select ($query_feat);

 //Create Query category
 $query2= "SELECT * FROM categories";
 //Run Query
 $categories= $db-> select ($query2);


 //Create Query ID=1
 $query_id1= "SELECT * FROM categories WHERE id=1";
 //Run Query
 $categories_top= $db-> select ($query_id1);

?>


  
      
    </div>
  
    
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
        	<h3 class="pb-3 mb-4 font-italic border-bottom"> </h3>
     
  <?php if($posts) : ?>
        <?php while ($row = $posts->fetch_assoc()) : ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>

              <p class="blog-post-meta"><?php echo formatDate($row['timestamp']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>

                  <?php echo $row['body']; ?>
             <?php endwhile; ?>
        <?php else : ?>
      <?php endif ?> 
</div>

          <?php include 'includes/footer.php'; ?>
