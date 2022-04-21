<html>
    <head>
        <link rel="stylesheet" href="blehv3.css">
        <title>Add Data</title>
    </head>
    <?php
        include "menu.html";
    ?>
    <h2>Add Customer to Database</h2>
    <body>
        <form method="post" action="">
            <label for="last_name">Last Name:</label><br>
            <input type="text" id="last_name" name="last_name" required><br>
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name" name="first_name" required><br>
            <label for="address_1">Address Line 1:</label><br>
            <input type="text" id="address_1" name="address_1" required><br>
            <label for="address_2">Address Line 2:</label><br>
            <input type="text" id="address_2" name="address_2"><br>
            <label for="city">City:</label><br>
            <input type="text" id="city" name="city" required><br>
            <label for="state">State (2 Letter Code, 'XX' for non US):</label><br>
            <input type="text" id="state" name="state" minlength="2" maxlength="2" required><br>
            <label for="postal_code">Postal Code (5 digit):</label><br>
            <input type="number" id="postal_code" name="postal_code" minlength="5" maxlength="5" max="99999"><br>
            <label for="country">Country:</label><br>
            <input type="text" id="country" name="country" required><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="home_phone">Home Phone:</label><br>
            <input type="text" id="home_phone" name="home_phone"><br>
            <label for="cell_phone">Cell Phone:</label><br>
            <input type="text" id="cell_phone" name="cell_phone"><br>
            <label for="facebook_url">Facebook Page URL:</label><br>
            <input type="text" id="facebook_url" name="facebook_url"><br>
            <label for="user_id">Username:</label><br>
            <input type="text" id="user_id" name="user_id" required><br>
            <label for="pword">Password:</label><br>
            <input type="password" id="pword" name="pword" required><br>
            <label for="salesperson">Salesperson:</label><br>
            <select id="salesperson" name="salesperson" required>
                <option value=1>Ritsuko Akagi</option>
                <option value=2>Kozo Fuyutsuki</option>
                <option value=3>Mari Makinami</option>
                <option value=4>Toji Suzuhara</option>
            </select><br>
            <br>
            <input type="submit", value="Submit">
        </form>
<?php
    require_once 'connectdb.php';
    if(isset($_POST["last_name"]) && isset($_POST["first_name"]) && isset($_POST["address_1"]) && isset($_POST["city"]) && isset($_POST["state"]) && isset($_POST["country"]) && isset($_POST["user_id"]) && isset($_POST["pword"]) && isset($_POST["salesperson"])){
        $last_name = $_POST["last_name"];
        $first_name = $_POST["first_name"];
        $address_1 = $_POST["address_1"];
        $address_2 = $_POST["address_2"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $postal_code = $_POST["postal_code"];
        $country = $_POST["country"];
        $email = $_POST["email"];
        $home_phone = $_POST["home_phone"];
        $cell_phone = $_POST["cell_phone"];
        $facebook_url = $_POST["facebook_url"];
        $user_id = $_POST["user_id"];
        $pword = $_POST["pword"];
        $salesperson = $_POST["salesperson"];
        $query_add_customer = "INSERT INTO customer(last_name, first_name, street_add_1, street_add_2, city, state, postal_code, country, email_address, home_phone, cell_phone, facebook_page_url, user_id, pword, salesperson_id) VALUES 
        ('$last_name', '$first_name', '$address_1', '$address_2', '$city', '$state', '$postal_code', '$country', '$email', '$home_phone', '$cell_phone', '$facebook_url', '$user_id', SHA1('$pword'), $salesperson)";
        $add_result = mysqli_query($db_conn, $query_add_customer);
        if($add_result){
            echo "<h2>Successfully Added Customer to Database!</h2>";
        }
        else{
            die("Error Writing to DB!");
        }
    }
    mysqli_close($db_conn);
?>
    </body>
</html>