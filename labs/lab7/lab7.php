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
<!DOCTYPE html><html><head><link rel="stylesheet" href="blehv2.css"><title>Lab 7</title><h1>Lab 7</h1></head>
<h2>Inverse Number Calculator</h2>
<form method="post", action="">
    Enter Number to get it's Inverse: <input type="number", name="inverseNum">
    <input type="submit", value="Submit">
</form>
<br><h2>Prime Number Checker</h2>
<form method="post", action="">
    Enter Number to Check if it's Prime: <input type="number", min="0", name="primeNum">
    <input type="submit", value="Submit">
</form>
<br><h2>Restaurant Tax and Tip Calculator</h2>
<form method="post", action="">
    Enter Subtotal: <input type="number", step="0.01" min="0.01", name="subtotal">
    Select Tip Rate: <select id="tipRate", name="tipRate">
        <option value=0.10>10%</option>
        <option value=0.15>15%</option>
        <option value=0.20>20%</option>
    </select>
    <input type="submit", value="Submit">
</form>
<br><h2>Results</h2>
<?php

if (isset($_POST["primeNum"])){
    $resPrime = checkPrime($_POST["primeNum"]);
    if($resPrime == True){
        echo $_POST["primeNum"]." is a prime number.<br>";
    }
    else{
        echo $_POST["primeNum"]." is not a prime number.<br>";
    }
}
if (isset($_POST["inverseNum"])){
    $resInverse = getInverse($_POST["inverseNum"]);
    if($resInverse == "Invalid"){
        echo $_POST["inverseNum"]." does not have an inverse.<br>";
    }
    else{
        echo "The inverse of ".$_POST["inverseNum"]." is ".$resInverse;
    }
}
if (isset($_POST["subtotal"]) && isset($_POST["tipRate"])){
    $resTipCalc = tipCalculator($_POST["subtotal"], $_POST["tipRate"]);
    $taxAmount = $resTipCalc[0];
    $tipAmount = $resTipCalc[1];
    $finalTotal = $resTipCalc[2];
    echo "<b>Subtotal:</b> $".$_POST["subtotal"]."<br>";
    echo "<b>Tax Amount:</b> $".$taxAmount."<br>";
    echo "<b>Tip Amount:</b> $".$tipAmount."<br>";
    echo "<b>Final Total:</b> $".$finalTotal."<br>";
}

function getInverse($num){
    if($num == 0){
        return "Invalid";
    }  
    else{
        return (1/$num);
    }
}

function checkPrime($num){
    if($num == 1 or $num == 0){
        return False;
    }
    else{
        for($i=2; $i <= $num/2; $i++){
            if($num%$i == 0){
                return False;
            }
        }
        return True;
    }
}

function tipCalculator($preTaxTotal, $tipPercentage){
    $taxAmount = round($preTaxTotal*0.07, 2, PHP_ROUND_HALF_UP);
    $tipAmount = round($preTaxTotal*$tipPercentage, 2, PHP_ROUND_HALF_UP); //It is assumed that we are not tipping on the tax in this calculator.
    $finalTotal = $preTaxTotal+$taxAmount+$tipAmount;
    return [$taxAmount, $tipAmount, $finalTotal];
}

?>
<h3><a href="http://nfm7.epizy.com/lab7/srcviewer.php">View src</a></h3>
<h3><a href="http://nfm7.epizy.com/">View All Assignments</h3>
</html>