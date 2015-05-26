<?php
// Get the id of the post and convert it to an ObjectId 
// Queries using _id need it converted to a MongoId object
$objectId = new MongoId($_GET['id']);

// Connect to the database 
include_once("connection.php");

// Get the post
$cursor = NULL;
/**********
** YOUR CODE HERE:
Get from $collection the document with the $objectId
**********/

while ($row = $cursor->next()) {
	// Include the header of the post (title and date)
	include("postHeader.php");

	//Show the body of the post
	/**********
	** YOUR CODE HERE:
	Print the body of the post (use the variable $row)
	**********/
	
	// Include the labels of the post
	include("labels.php");

	// Include the comments of the post
	include("comments.php");

	echo '</div>';
}
?>