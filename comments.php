<?php
// This script is included in the showXYZ.php scripts.
// In those scripts $row has been initialized with the current post

echo '<h2>Comentarios</h2>';

// Show the comments of the current post
echo '<ul>';

/**********
** YOUR CODE HERE:
Iterate through the post (use the variable $row) and get the comments
For each comment print only the first 100 characters (use the PHP substr() function)
**********/
foreach($row['comments'] as $comment)
{
  $textcomment = substr($comment['body'],0,100);
  $cauthor=$comment['author'];
  echo "<li>(<a href='index.php?command=showPostsCommentedByAuthor&author=$cauthor'>$cauthor</a>)$textcomment</li>";
}
echo '</ul>';
?>