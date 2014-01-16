<?php
	do { 
		echo "<p><b><a href=\"job.php?id=$row[job_id]\">$row[job_title]</a>";
		echo "<small> - posted on: " . "$row[job_date]" . "</small>";
	} while ($row = mysqli_fetch_array($result));
?>