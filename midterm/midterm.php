<!-- Another quality software product /s by  
 ███▄    █  ▒█████   ▄▄▄       ██░ ██     ███▄ ▄███▓ ▄▄▄       ██▀███  ▄▄▄█████▓ ██▓ ███▄    █  ▒█████     
 ██ ▀█   █ ▒██▒  ██▒▒████▄    ▓██░ ██▒   ▓██▒▀█▀ ██▒▒████▄    ▓██ ▒ ██▒▓  ██▒ ▓▒▓██▒ ██ ▀█   █ ▒██▒  ██▒   
▓██  ▀█ ██▒▒██░  ██▒▒██  ▀█▄  ▒██▀▀██░   ▓██    ▓██░▒██  ▀█▄  ▓██ ░▄█ ▒▒ ▓██░ ▒░▒██▒▓██  ▀█ ██▒▒██░  ██▒   
▓██▒  ▐▌██▒▒██   ██░░██▄▄▄▄██ ░▓█ ░██    ▒██    ▒██ ░██▄▄▄▄██ ▒██▀▀█▄  ░ ▓██▓ ░ ░██░▓██▒  ▐▌██▒▒██   ██░   
▒██░   ▓██░░ ████▓▒░ ▓█   ▓██▒░▓█▒░██▓   ▒██▒   ░██▒ ▓█   ▓██▒░██▓ ▒██▒  ▒██▒ ░ ░██░▒██░   ▓██░░ ████▓▒░   
░ ▒░   ▒ ▒ ░ ▒░▒░▒░  ▒▒   ▓▒█░ ▒ ░░▒░▒   ░ ▒░   ░  ░ ▒▒   ▓▒█░░ ▒▓ ░▒▓░  ▒ ░░   ░▓  ░ ▒░   ▒ ▒ ░ ▒░▒░▒░    
░ ░░   ░ ▒░  ░ ▒ ▒░   ▒   ▒▒ ░ ▒ ░▒░ ░   ░  ░      ░  ▒   ▒▒ ░  ░▒ ░ ▒░    ░     ▒ ░░ ░░   ░ ▒░  ░ ▒ ▒░    
   ░   ░ ░ ░ ░ ░ ▒    ░   ▒    ░  ░░ ░   ░      ░     ░   ▒     ░░   ░   ░       ▒ ░   ░   ░ ░ ░ ░ ░ ▒     
         ░     ░ ░        ░  ░ ░  ░  ░          ░         ░  ░   ░               ░           ░     ░ ░     
Noah Martino (c) 2022 - MIT License                               
-->
<!DOCTYPE html><html><head><title>Midterm NFM7</title><h1>Midterm NFM7</h1></head>
<style>
td {
    border: solid 2px black;
}
</style>
<?php
$months_to_days = array("January"=>"31", "February"=>"28", "March"=>"31", "April"=>"30", "May"=>"31", "June"=>"30", "July"=>"31", "August"=>"31", "September"=>"30", "October"=>"31", "November"=>"30", "December"=>"31");
ksort($months_to_days);
echo "<table>";
foreach($months_to_days as $month => $days) {
    echo "<tr>";
    echo "<td>$month</td>";
    echo "<td>$days</td>";
    echo "</tr>";
}
echo "</table>"
?>
</html>
<h3><a href="http://nfm7.epizy.com/midterm/midterm_srcviewer.php">View src</a></h3>
<h3><a href="http://nfm7.epizy.com/">View All Assignments</h3>