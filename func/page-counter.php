<?php
if ( $pagelimit == -1 ) { // Pagination for page 1 of job results.
	echo "<p>You're on Page: $pageid | <a href=\"page.php?id=$nextpage\">Next 25 Jobs</a></p>";
}
elseif ( $numrows < 25 ) { // Pagination for page 2 of job results.
	echo "<p><a href=\"page.php?id=$pastpage\">Previous 25 Jobs</a> | You're on the last Page: $pageid</p>";
}
elseif ( $pagelimit == 24 ) { // Pagination for paged between 2 and end of results.
	echo "<p><a href=\"http://www.dalesjobs.org\">First 25 Jobs</a> | You're on Page: $pageid | <a href=\"page.php?id=$nextpage\">Next 25 Jobs</a></p>";
}
elseif ( $pagelimit > 24 ) { // Pagination for end of results page.
	echo "<p><a href=\"page.php?id=$pastpage\">Previous 25 Jobs</a> | You're on Page: $pageid | <a href=\"page.php?id=$nextpage\">Next 25 Jobs</a></p>";
}
else {
	echo "There has been a pagination error.";
}
?>