<?php
$pageid = $_REQUEST["id"]; // Grabs the page ID via GET request.
require_once("func/con-open.php"); // Connections are require_once.
include("func/pagination.php");
include("func/page-query.php"); // All mysqli queries are in this file.
?>

<!DOCTYPE html>  
<head>  

<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
echo"<title>DalesJobs | Page $pageid of jobs in the Swansea area</title>";
include("inc/head.php");
?>

<div id="content">

<?php 
include("func/search.php");

echo "<p>You Are &gt; Home &gt; Jobs In The Swansea Area</p>";

include("func/page-loop.php"); // The loop is in this file.
include("func/page-counter.php"); // Additional pagination functionality.
?>

</div>
</div>

<?php include("inc/foot.php"); ?>

</body>

</html>