<!DOCTYPE html><html><head><link rel="stylesheet" href="bleh.css"><title>Feedback Sent!</title><h1>Feedback Sent!</h1></head>
    <?php
    $fn = filter_input(INPUT_POST, "first_name");
    $ln = filter_input(INPUT_POST, "last_name");
    $fb = filter_input(INPUT_POST, "feedback");
    echo "Feedback Sent:<br><br>";
    echo "$fn $ln<br>$fb"
    ?>
</html>