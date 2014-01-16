<?php
if (!(isset($pageid))) { // Checks to see if a page number is assigned.
	$pageid = 1;
}

$pagelimit = $pageid * 25 - 26;
$nextpage = $pageid + 1;
$pastpage = $pageid - 1;
?>