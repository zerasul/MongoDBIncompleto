<?php
// Get the id of the post and convert it to an ObjectId 
// Queries using _id need it converted to a MongoId object
$objectId = new MongoId($_GET['id']);

// Connect to the database 
include_once("connection.php");

// Get the post
$cursor = NULL;

$cursor= $collection->find(array('_id' => $objectId));

while ($row = $cursor->next()) {
	// Include the header of the post (title and date)
	include("postHeader.php");

	//Show the body of the post
	echo $row['body'];
	
	// Include the labels of the post
	include("labels.php");

	// Include the comments of the post
	include("comments.php");

	echo '</div>';
}
?>