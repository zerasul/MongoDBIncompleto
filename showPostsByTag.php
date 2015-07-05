<?php
// Get the tag to be found
$tag = $_GET['tag'];

// Connect to the database 
include_once("connection.php");

// Get 5 posts including the tag
$cursor = NULL;
/**********
** YOUR CODE HERE:
Get from $collection five post documents that have the tag $tag
**********/
$cursor= $collection->find(array("tags"=>$tag))->limit(5);

// Show the 5 posts
while ($row = $cursor->next()) {
	// Include the header of the post (title and date)
	include("postHeader.php");

	//Show the first 300 characters of the body of the comment
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