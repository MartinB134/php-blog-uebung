<?php include '../config/config.php';
include '../libraries/Database.php';
include '../helpers/format_helper.php';

//Create Database
 
	$db = new Database();

//Create Featured Post
 $query_feat= "SELECT * FROM posts WHERE category=2";
 //Run Query
 $posts_feat= $db-> select ($query_feat);


//Create Query
 $query= "SELECT * FROM posts WHERE category!=2";
 //Run Query
 $posts= $db-> select ($query);


 //Create Query category
 $query2= "SELECT * FROM categories";
 //Run Query
 $categories= $db-> select ($query2);


 //Create Query ID=1
 $query_id1= "SELECT * FROM categories WHERE id=1";
 //Run Query
 $categories_top= $db-> select ($query_id1);

?>


<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="https://png.icons8.com/office/16/000000/php-logo.png">

		<title>Admin Area</title>
		<!-- Bootstrap core CSS -->
		<link href="../css/bootstrap.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
		<link href="../css/custom.css" rel="stylesheet">
	</head>

<body>

<div class="nav-scroller py-1 mb-2 blog-masthead">
	<div class="container">
				<nav class="blog-nav nav d-flex justify-content-between">
					<a class="p-2 text-muted blog-nav-item" href="./posts.php">All Posts</a>
					<a class="p-2 text-muted blog-nav-item" href="index.php">Dashboard</a>
					<a class="p-2 text-muted blog-nav-item" href="add_post.php">Add Post</a>
					<a class="p-2 text-muted blog-nav-item" href="add_category.php">Add Category</a>
					<a class="p-2 text-muted blog-nav-item pull-right" href="localhost/php_blog">Home</a>
	</div>
				</nav>
			</div>



	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
					<img class="navbar-brand" src="../images/php-logo.svg">
				</div>
				<div class="col-4 text-center">
					<a class="blog-header-logo text-dark" href="#">PHP Blog</a>
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<a class="text-muted" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
							<circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
						</a>
						<a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
					</div>
				</div>
			</header>

			