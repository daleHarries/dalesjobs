<?php
// Opens a mysqli connection within the page.
$connect = mysqli_connect("localhost","dalesjob_user","f717gha19822011","dalesjob_dale") or die("Error " . mysqli_error($link));

if (mysqli_connect_errno()) { // Fail without descriptive error message.
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
