<!DOCTYPE html>  
<head>  

<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>DalesJobs | Post New Job</title>
<?php include("inc/head.php"); ?>

<script type="text/javascript" src="input/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode: "textareas",
		elements : "jobs",
		height:"650px",
		width:"100%",
		plugins: "autolink"
	});	
</script>

<div id="content">

<p>You Are &gt; <a href="/">Home</a> &gt; Post New Job</p>
<h3>Post New Job</h3>

<form action="success.php" method="post">
		<p>Job Title: <input type="text" size="50" name="jobtitle"> eg: Hair Stylist required in Neath</p>
		<p>Job Description:<br/> <textarea id="jobs" name="jobdesc"></textarea>
	</p>

	<p><b>Dale's Checklist:</b></p>
	<ul>
		<li>Have you included a contact phone number, email address or website address?</li>
		<li>Have you included salary details?</li>
		<li>Have you included the job type eg: temporary, permanent?</li>
		<li>Have you specified your company type eg: employer, agency?</li>
	</ul>
	
<p><b>Security Question:</b> What's 8 x 7: <input type="text" size="25" name="answer"></p>

<p><b>Security Captcha:</b></p>

<img id="captcha" src="captcha/securimage_show.php" alt="CAPTCHA Image" />

<p>Enter Captcha Code: <input type="text" name="code" size="10" maxlength="6" /></p>

<input type="submit" value="Post my Job">

</form>

</div>
</div>

<?php include("inc/foot.php"); ?>

</body>

</html>