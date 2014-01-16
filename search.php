<?php
$query = "SELECT * FROM jobs WHERE job_desc LIKE '%$_GET[id]%'";
$term = $_GET[id];
require_once("func/con-open.php");
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>  
<head>  

<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DalesJobs | Search Results</title>
<?php include("inc/head.php"); ?>

<div id="content">

<form action="search.php" method="GET">
	<input type="text" name="id" size="50">
	<input type="submit" value="Search Jobs">
</form>

<?php

if($row[job_id] == null){ // Checks to see of the search function returned results.
	echo "<p>Sorry, there are no job listed for \"$term\"</p><p>Try another search or browse jobs on our <a href=\"http://www.dalesjobs.org/\">Home Page</a>.";
} 
else {
	echo "<p>Cool, there are jobs listed for \"$term\". Here they are!</p>"; // Placed out of do loop to avoid duplication.
	do {
		echo "<p><b><a href=\"job.php?id=$row[job_id]\">"; // The link to each job.
		$row[job_title] = htmlspecialchars($row[job_title]);
		echo "$row[job_title]"; // Linked job title.
		echo "</a></b><small> - posted on: " . "$row[job_date]" . "</small>"; // End of link & Date Function.
	} while ($row = mysqli_fetch_array($result)); // While and only if the fetch function is returning data.
}

?>

</div>
</div>

<?php include("inc/foot.php"); ?>

</body>

</html>