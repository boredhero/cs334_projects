<!DOCTYPE html><html><head><title>Final src</title></head>
<style>
    body {
        background-color: #f1f0cc;
    }
    h1, h2, h3, h4, h5, h6 {
        color: #3f0d12;
    }
</style>
<body>
<?php
include "menu.html";
echo "<br><br><img src='under_construction.png', alt='Weeb at Work'>";
echo "<h1>Source Code:</h1>";
echo "<h2>final.php</h2>";
$s1 = show_source("final.php", true);
echo $s1;
$s2 = show_source("srcviewer.php", true);
echo "<h2>srcviewer.php</h2>";
echo $s2;
$s3 = show_source("blehv4.css", true);
echo "<h2>blehv4.css</h2>";
echo $s3;
$s4 = show_source("subscribe.php", true);
echo "<h2>subscribe.php</h2>";
echo $s4;
$s5 = show_source("list_subs.php", true);
echo "<h2>list_subs.php</h2>";
echo $s5;
$s6 = show_source("filter_hotels.php", true);
echo "<h2>filter_hotels.php</h2>";
echo $s6;
$s7 = show_source("filter_restaurants.php", true);
echo "<h2>filter_restaurants.php</h2>";
echo $s7;
$s8 = show_source("list_hotels.php", true);
echo "<h2>list_hotels.php</h2>";
echo $s8;
$s9 = show_source("list_restaurants.php", true);
echo "<h2>list_restaurants.php</h2>";
echo $s9;
$s10 = show_source("database_schema.php", true);
echo "<h2>database_schema.php</h2>";
echo $s10;
$s11 = show_source("menu.html", true);
echo "<h2>menu.html</h2>";
echo $s11;
$s12 = show_source("schema_img/dummyconnect.php", true);
echo "<h2>connectdb.php</h2>";
echo $s12;
?>
</body>
</html>