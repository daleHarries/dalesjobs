<?php
$pageid = $_REQUEST["id"]; // Grabs the page ID via GET request.
require_once("func/con-open.php"); // Connections are require_once because of error handling.
include("func/pagination.php");
include("func/page-query.php"); // All mysqli queries are in here.
?>

<!DOCTYPE html>  
<head>  

<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>DalesJobs | Jobs in the Swansea area</title>
<?php include("inc/head.php"); ?>

<div id="content">

<?php 
include("func/search.php");

echo "<p>You Are &gt; Home &gt; Jobs In The Swansea Area</p>";

include("func/page-loop.php"); // All loops are in this file.
include("func/page-counter.php"); // Extra pagination functionality.
?>

</div>
</div>

<?php include("inc/foot.php"); ?>

</body>

</html>