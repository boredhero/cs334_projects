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
<!DOCTYPE html><html><head><title>Lab 5</title><h1>Lab 5</h1></head></html>
<?php
function numbers(){
    for($i=1; $i<=100; $i++){
        # Made these as vars because its slightly more efficient to calculate them once per loop rather than calculate them each time they're used in an if statement
        $four = $i % 4;
        $six = $i % 6;
        if($four == 0){
            echo "COVID19 ";
        }
        if($six == 0){
            echo "Test";
        }
        if($four != 0 && $six != 0){
            echo $i;
        }
        echo ",\n";
    }
}
numbers();
?>
<h3><a href="http://nfm7.epizy.com/lab5/lab5_src.php">View src</a></h3>
<h3><a href="http://nfm7.epizy.com/">View All Assignments</h3>