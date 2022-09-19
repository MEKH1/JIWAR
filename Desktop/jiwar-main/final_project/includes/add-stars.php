<?php 
$postID = 1; // It will be changed with dynamic value 
 
// Fetch the post and rating info from database 
$query = "SELECT p.*, COUNT(r.rating_number) as rating_num, FORMAT((SUM(r.rating_number) / COUNT(r.rating_number)),1) as average_rating FROM users as p LEFT JOIN rating as r ON r.post_id = p.id WHERE p.id = $postID GROUP BY (r.post_id)"; 
$result = $conn->query($query); 
$postData = $result->fetch_assoc(); 
?>