<?php include 'includes/header.php' ?>

<form method="post" action="add_category.php" id="create_category">
  <div class="form-group">
    <label for="title_form">Title</label>
    <input name="title_form" type="text" class="form-control" id="title_form" placeholder="Your Category">
    <input  value="submit" type="submit" name="sbmt_ctgry">
  </div>
 </form>

 <?php include 'includes/footer.php' ?>