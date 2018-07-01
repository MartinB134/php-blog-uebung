</div><!-- /.blog-post -->

		<nav class="blog-pagination">
			<a class="btn btn-outline-primary" href="#">Older</a>
			<a class="btn btn-outline-secondary" href="#">Newer</a>
		</nav>
	</div><!-- /.blog-main -->

	<aside class="col-md-4 blog-sidebar">
		<div class="p-3 mb-3 bg-light rounded">
			<h4 class="font-italic">About</h4>
			<p class="mb-0"><?php echo $about; ?></p>
		</div>

		 <h4 class="font-italic">Categories</h4>
			<div class="p-3">
				<ol class="list-unstyled mb-0">
				 <?php if ($categories): ?>
					<?php while ($row= $categories->fetch_assoc()) : ?>    
						<li><a href="posts.php?category=<?php echo urlencode($row['id']); ?>"><?php echo $row['name']; ?></a></li>
						<?php endwhile ?> 
						 <?php else:  ?>
							<p>There are no categories yet.</p>
					<?php endif ?> 
		 </ol>
		</div>

				</aside><!-- /.blog-sidebar -->

			</div><!-- /.row -->

		</main><!-- /.container -->

		<footer class="blog-footer">
			<p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
			<p>
				<a href="#">Back to top</a>
				<a href="https://icons8.com" style="float: right">Icon pack by Icons8</a>
			</p>
		</footer>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/holder.min.js"></script>
		<script>
			Holder.addTheme('thumb', {
				bg: '#55595c',
				fg: '#eceeef',
				text: 'Thumbnail'
			});
		</script>
	</body>
</html>
