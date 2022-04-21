<!DOCTYPE html><html><head><title>Lab 6 src</title><h1>Lab 6 src</h1><a href="http://nfm7.epizy.com/lab6/lab6.php">Go back?</a></head>
<?php
echo "<h2>lab6.php</h2>";
$s1 = show_source("lab6.php", true);
echo $s1;
echo "<h2>lab6feedback.php</h2>";
$s2 = show_source("lab6feedback.php", true);
echo $s2;
$s3 = show_source("srcviewer.php", true);
echo "<h2>srcviewer.php</h2>";
echo $s3;
$s4 = show_source("bleh.css", true);
echo "<h2>bleh.css</h2>";
echo $s4;
?>
</html>