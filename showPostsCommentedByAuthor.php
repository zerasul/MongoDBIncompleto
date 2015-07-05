<?php
// Get the author to be found
$author = $_GET['author'];

// Connect to the database 
include_once("connection.php");

// Get 5 posts commented by the author
$cursor = $collection->find(array('comments.author' => $author))->limit(5);

while ($row = $cursor->next()) {
	// Include the header of the post (title and date)	
	include("postHeader.php");

	//Show the first 300 characters of the post body
	/**********
	** YOUR CODE HERE:
	** Get the body of a post (use the variable $row)
	Print the first 300 characters of the body (use the PHP substr() function)
	**********/
	$text = substr($row['body'],0,300);
	echo $text;
	// Setup an hyperlink to obtain the full text of the post
	// The hyperlink points to index.php with this two GET parameters:
	// command: 'showMore' 
	// id: the string of the _id of the post
	$id = $row['_id']->{'$id'};
	echo '<a href = index.php?command=showMore&id=' . $id . '> Mostrar más</a>';
	
	// Include the labels of the post
	include("labels.php");

	// Include the comments of the post
	include("comments.php");

	echo '</div>';
}
?>