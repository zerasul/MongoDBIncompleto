<?php
// This script is included in the showXYZ.php scripts.
// In those scripts $row has been initialized with the current post

	echo '<div class="blog-post">';

	// Show post title
	echo '<h2 class="blog-post-title">';
	echo $row['title'];
	echo'</h2>';

	// Show post date and author
	echo '<p class="blog-post-meta">';
	$fecha = $row['date'];
	echo $fecha->toDateTime()->format('l, d F Y');
	/**********
	** YOUR CODE HERE:
	Print the date of the post (use the variable $row)
	Format the date with this PHP method: toDateTime()->format('l, d F Y' )
	**********/
	echo ' by <a href="#">';
	
	echo $row['author'];
	echo '</a></p>';
?>