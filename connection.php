<?php
// Setup MongoDB connection
$connection = NULL;

$connection = new MongoClient();

// Select the "posts" collection in the database "blog"

$collection = $connection->ggvdblog->posts;



?>