<?php
include 'includes/header.php';

?>

  
      <div id="jumbotron-costum" class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-12 px-0">

                                                        <?php if($posts_feat) : ?>
                                                        <?php while ($row = $posts_feat->fetch_assoc()) : ?>
          <h1 class="display-4 font-italic">            <?php echo $row['title']; ?></h1>
          <p class="blog-post-meta">                     <?php echo formatDate($row['timestamp']); ?> <a href="#">von <?php echo $row['author']; ?> </a></p>
      <p class="lead my-3">
                                                         <?php echo shorten(strval($row['body']), 300); ?>
          <p class="lead mb-0"><a href="post.php?id=<?php echo urlencode($row['ID']); ?>" class="text-white font-weight-bold">Continue reading...</a></p>
                                                        <?php endwhile; ?>
                                                        <?php else : ?>
                                                        <?php endif ?>       
        </div>
      </div>
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

                  <?php echo shorten($row['body']); ?>
            
            <a class="readmore" href="post.php?id=<?php echo urlencode($row['ID']); ?>">Read More</a>
          <?php endwhile; ?>
        <?php else : ?>
      <?php endif ?> 


          <?php include 'includes/footer.php'; ?>