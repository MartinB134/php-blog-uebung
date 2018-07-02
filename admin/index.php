
<?php include 'includes/header.php' ?>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Post ID#</th>
      <th scope="col">Post Title</th>
      <th scope="col">Category</th>
      <th scope="col">Author</th>
       <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>

      <?php while($row = $posts->fetch_assoc()) : ?>
      	<tr>
    			<td><?php echo $row['ID'] ?></td>
					<td><a href="edit_post.php?id=<?php echo $row['ID'] ?>"><?php echo $row['title'] ?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['author'] ?></td>
					<td><?php echo formatDate($row['timestamp']) ?></td>
					<tr>
					<?php endwhile ?>
				
    
  </tbody>
</table>



<table id="categories-table" class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Category ID#</th>
       <th scope="col">Category Name</th>
        </tr>
  </thead>
  <tbody>
  	 <?php while($row = $categories->fetch_assoc()) : ?>
      	<tr>
    			<td><?php echo $row['id'] ?></td>
					<td><a href="edit_category.php?id=<?php echo $row['ID'] ?>"><?php echo $row['name'] ?></td>
					<tr>
					<?php endwhile ?>
  </tbody>
</table>


<?php include 'includes/footer.php' ?>