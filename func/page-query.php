<?php
if ($pageid == 1){
	$query = "SELECT * FROM jobs ORDER BY job_date DESC LIMIT 25"; // Query for homepage.
} elseif ($pageid > 1){
	$query = "SELECT * FROM jobs ORDER BY job_id DESC LIMIT $pagelimit,25"; // Query for paginated search / job pages.
} else{
	$query = "SELECT job_id, job_title, job_desc FROM jobs WHERE job_id = $job_id"; // Query for single job post.
}
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$numrows = mysqli_num_rows($result); // Counts the number of rows per paginated page.
?>