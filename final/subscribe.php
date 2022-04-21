<html>
    <head>
        <link rel="stylesheet" href="blehv4.css">
        <title>Subscribe</title>
    </head>
    <?php
        include "menu.html";
    ?>
    <h2>Subscribe to our Mailer</h2>
    <body>
        <form method="post" action="">
            <label for="last_name">Last Name:</label><br>
            <input type="text" id="last_name" name="last_name" required><br>
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name" name="first_name" required><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="phone_number">Phone Number:</label><br>
            <input type="text" id="phone_number" name="phone_number"><br>
            <input type="submit", value="Submit">
        </form>
<?php
    require_once 'connectdb.php';
    if(isset($_POST["last_name"]) && isset($_POST["first_name"]) && isset($_POST["email"]) && isset($_POST["phone_number"])){
        $last_name = $_POST["last_name"];
        $first_name = $_POST["first_name"];
        $email = $_POST["email"];
        $phone_number = $_POST["phone_number"];
        $query_add_subscriber = "INSERT INTO subscriber(last_name, first_name, email_address, phone_number) VALUES 
        ('$last_name', '$first_name', '$email', '$phone_number')";
        $add_result = mysqli_query($db_conn, $query_add_subscriber);
        if($add_result){
            echo "<h2>Successfully Added Subscriber!</h2>";
        }
        else{
            die("Error Writing to DB!");
        }
    }
    mysqli_close($db_conn);
?>
    </body>
</html>