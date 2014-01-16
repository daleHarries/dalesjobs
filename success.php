<?php
session_start(); // Required for captcha to work properly.
require_once("func/con-open.php");
?>

<!DOCTYPE html>
<html>

<head>
<meta name="robots" content="noindex, nofollow">
	<title>DalesJobs | You just posted a new job</title>
<?php include("inc/head.php"); ?>

<div id="content">

<?php

include_once "captcha/securimage.php"; // The captcha image.

$securimage = new Securimage();
$jobtitle = $_REQUEST["jobtitle"];
$jobdesc = $_REQUEST["jobdesc"];
$answer = $_REQUEST["answer"];

$jobtitle = htmlspecialchars($jobtitle);
$answer = htmlspecialchars($answer);

// Everything to do with HTML Purifier goes here.

require_once "pure/library/HTMLPurifier.auto.php";

$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);
$jobdesc = $purifier->purify($jobdesc);

// End of HTML Purifier code.

if ($securimage->check($_POST['code']) == false) {
	echo "<p>The security code entered was incorrect.</p>";
	echo "<p>Please go <a href=\"post-new.php\">back</a> and try again.</p>";
exit;
} else
	if ($answer == 56){
		$query = "INSERT INTO jobs ( job_title, job_desc, job_date ) VALUES ( '$jobtitle', '$jobdesc', CURDATE() )";
		$result = mysqli_query($connect, $query);
	}
	else {
		echo "<p>You have answered the security question incorrect, please <a href=\"post-new.php\"> and try again.</p>";
}

?>
	
<p>Thanks for posting:</p>

<ul>
	<li><a href="/">See your job advert on the homepage</a></li>
</ul>

</div>
</div>

<?php include("inc/foot.php"); ?>

</body>

</html>