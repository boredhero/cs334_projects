<!DOCTYPE html><html><head><title>Lab 9 src</title></head>
<style>
    body {
        background-color: #aef6c7;
    }
    h1, h2, h3, h4, h5, h6 {
        color: #294936;
    }
</style>
<body>
<?php
include "menu.html";
echo "<h1>Source Code:</h1>";
echo "<h2>lab9.php</h2>";
$s1 = show_source("lab9.php", true);
echo $s1;
$s2 = show_source("srcviewer.php", true);
echo "<h2>srcviewer.php</h2>";
echo $s2;
$s3 = show_source("blehv3.css", true);
echo "<h2>blehv3.css</h2>";
echo $s3;
$s4 = show_source("connectdb.php", true);
echo "<h2>connectdb.php</h2>";
echo $s4;
$s5 = show_source("viewdb.php", true);
echo "<h2>viewdb.php</h2>";
echo $s5;
$s6 = show_source("menu.html", true);
echo "<h2>menu.html</h2>";
echo $s6;
$s7 = show_source("adddb.php", true);
echo "<h2>adddb.php</h2>";
echo $s7;
$s8 = show_source("searchdb.php", true);
echo "<h2>searchdb.php</h2>";
echo $s8;
$s9 = show_source("editdb.php", true);
echo "<h2>editdb.php</h2>";
echo $s9;
$s10 = show_source("e_success.php", true);
echo "<h2>e_success.php</h2>";
echo $s10;
?>
</body>
</html>