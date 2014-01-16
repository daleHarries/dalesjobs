<?php
$jobid = $_REQUEST["id"]; // Grabs the page ID via GET request.
require_once("func/con-open.php"); // Connections are require_once.
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

<?php include("func/search.php"); ?>

<p>You Are &gt; <a href="/">Home</a> &gt; Job Listings &gt; <?php echo $row["job_title"]; ?></p>

<h3><?php echo $row["job_title"]; ?><p><?php echo $row["job_desc"]; ?></p>

<div id="noticeboard">

<h3>Dale's Job Checklist</h3>
<ul>
	<li>Please do not contact job poster about other services, products or commercial interests.</li>
	<li>Please do not contact job poster to offer recruitment agency services.</li>
	<li>This job should be located within the Swansea area or within South Wales if an executive / technical position.</li>
</ul>

<h3>Is This Job Spam? Let Me Know!</h3>
<p>If you feel this advert is spam please drop me an email: <a href="mailto:dale@dalesjobs.org">dale@dalesjobs.org</a></p>

</div>
</div>

<?php include("inc/foot.php"); ?>

</body>

</html>