<?php include 'includes/header.php' ?>

<form method="post" action="add_post.php" id="create_post">
  <div class="form-group">
    <label for="title_form">Title</label>
    <input name="title_form" type="email" class="form-control" id="title_form" placeholder="Title of your Post">
  </div>

  <div class="form-group">
    <label for="text_form">Text</label>
    <textarea name="text_form" class="form-control" id="text_form" rows="8">
    </Textarea>
  </div>
  <div class="form-group">
    <label for="category_form">Category</label>
    <select name="category_form" multiple class="form-control" id="category_form">
      <option>News</option>
      <option>Events</option>
      <option>Tutorial</option>
      <option>Other</option>
    </select>
  </div>
  <div class="form-group">
    <label for="title_form">Author</label>
    <input name="author_form" type="text" class="form-control" id="author_form" placeholder="Author">
  </div>
  <div class="form-group">
    <label for="title_form">Tags</label>
    <input name="title_form" type="text" class="form-control" id="title_form" placeholder="#Tags for your Post">
  </div>
  	<div class="form-group">
		<input  value="Submit" type="submit" class="btn" name="sbmt_btn"  formaction="get">
		<a href="index.php" class="btn btn-default">Cancel</a>
	</div>
</form>



<?php include 'includes/footer.php' ?>