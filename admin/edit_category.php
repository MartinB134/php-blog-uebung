<?php include 'includes/header.php' ?>

<form method="post" action="edit_category.php" id="edit_category">
  <div class="form-group">
    <label for="title_form">Edit Category</label>
    <input name="title_form" type="text" class="form-control" id="title_form" placeholder="Edit Category">
    <input type="submit" class="btn" name="sbmt_btn" value="submit">
    <a href="index.php" class="btn btn-default">Cancel</a>
    <input type="submit" class="btn btn-danger" name="delete" value="delete">
  </div>
 </form>

 <?php include 'includes/footer.php' ?>