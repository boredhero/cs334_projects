<html>
    <head>
        <link rel="stylesheet" href="blehv3.css">
        <title>Search and Edit Users</title>
    </head>
    <body>
    <?php
        include "menu.html";
        require_once 'connectdb.php';
        if(isset($_POST['edit'])){
            //Do edit stuff
            echo "double hi hi hi";
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
            $cust_id = $_POST["cust_id"];

            $query_e2 = "UPDATE customer SET last_name='$last_name', first_name='$first_name', street_add_1='$address_1', street_add_2='$address_2', city='$city', state='$state', postal_code='$postal_code',
            country='$country', email_address='$email', home_phone='$home_phone', cell_phone='$cell_phone', facebook_page_url='$facebook_url', user_id='$user_id', pword='$pword', salesperson_id='$salesperson' WHERE customer_id=$cust_id";
            $e2_res = mysqli_query($db_conn, $query_e2);
            header("Location: e_success.php");
        }
        if(isset($_POST["cust_id"])){
            $cust_id = $_POST["cust_id"];
            $query_e1 = "SELECT * FROM customer WHERE customer_id LIKE $cust_id";
            $query_res = mysqli_query($db_conn, $query_e1);
            if(!$query_res){
                $err = mysqli_error($db_conn);
                die("An error occured reading the database. Please try again later.<br><br>$err");
            }
            else{
                $row = $query_res->fetch_array(MYSQLI_NUM);
                foreach($row as $item){
                    echo "$item<br>";
                }
                $cust_id = $row[0];
                $last_name = $row[1];
                $first_name = $row[2];
                $address_1 = $row[3];
                $address_2 = $row[4];
                $city = $row[5];
                $state = $row[6];
                $zip = $row[7];
                $country = $row[8];
                $email = $row[9];
                $home_phone = $row[10];
                $cell_phone = $row[11];
                $facebook = $row[12];
                $username = $row[13];
                $pass_hash = $row[14];
                $salesperson = $row[15];
                echo "<h2>Edit Customer to Database</h2>
                    <form method='post' action=''>
                        <label for='last_name'>Last Name:</label><br>
                        <input type='text' id='last_name' name='last_name' required value='$last_name'><br>
                        <label for='first_name'>First Name:</label><br>
                        <input type='text' id='first_name' name='first_name' required value='$first_name'><br>
                        <label for='address_1'>Address Line 1:</label><br>
                        <input type='text' id='address_1' name='address_1' required value='$address_1'><br>
                        <label for='address_2'>Address Line 2:</label><br>
                        <input type='text' id='address_2' name='address_2' value='$address_2'><br>
                        <label for='city'>City:</label><br>
                        <input type='text' id='city' name='city' required value='$city'><br>
                        <label for='state'>State (2 Letter Code, XX for non US):</label><br>
                        <input type='text' id='state' name='state' minlength='2' maxlength='2' required value='$state'><br>
                        <label for='postal_code'>Postal Code (5 digit):</label><br>
                        <input type='number' id='postal_code' name='postal_code' minlength='5' maxlength='5' max='99999' value='$zip'><br>
                        <label for='country'>Country:</label><br>
                        <input type='text' id='country' name='country' required value='$country'><br>
                        <label for='email'>Email:</label><br>
                        <input type='text' id='email' name='email' value='$email'><br>
                        <label for='home_phone'>Home Phone:</label><br>
                        <input type='text' id='home_phone' name='home_phone' value='$home_phone'><br>
                        <label for='cell_phone'>Cell Phone:</label><br>
                        <input type='text' id='cell_phone' name='cell_phone' value='$cell_phone'><br>
                        <label for='facebook_url'>Facebook Page URL:</label><br>
                        <input type='text' id='facebook_url' name='facebook_url' value='$facebook'><br>
                        <label for='user_id'>Username:</label><br>
                        <input type='text' id='user_id' name='user_id' required value='$username'><br>
                        <label for='pword'>Password:</label><br>
                        <input type='password' id='pword' name='pword' required value='$pass_hash'><br>
                        <label for='salesperson'>Salesperson:</label><br>
                        <select id='salesperson' name='salesperson' required, value='$salesperson'>
                            <option value=1>Ritsuko Akagi</option>
                            <option value=2>Kozo Fuyutsuki</option>
                            <option value=3>Mari Makinami</option>
                            <option value=4>Toji Suzuhara</option>
                        </select><br>
                        <select id='edit' name='edit' required, value='1'>
                            <option value=1>Yes</option>
                        </select><br>
                        <label for='cust_id'>DO NOT EDIT THIS LINE!</label><br>
                        <input type='number' id='cust_id' name='cust_id' required value='$cust_id'><br>
                        <br>
                        <input type='submit', value='Submit'>
                    </form>";
            }
        }
    ?>
    <h2>Search For User (You Will Have an Option To Edit AFTER you Search!!!)</h2>
        <form method="post" action="">
            <label for="last_name">Last Name:</label><br>
            <input type="text" id="last_name" name="last_name"><br>
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name" name="first_name"><br>
            <input type="submit", value="Submit">
        </form>
<?php
    require_once 'connectdb.php';
    if(isset($_POST["last_name"]) && isset($_POST["first_name"])){
        $last_name = $_POST["last_name"];
        $first_name = $_POST["first_name"];
        $query_search = "SELECT * FROM customer WHERE first_name LIKE '$first_name' OR last_name LIKE '$last_name'";
        $query_res = mysqli_query($db_conn, $query_search);
        if(!$query_res){
            die("Error Connecting to DB or no results found!");
        }
        $rows = $query_res->num_rows;
        if($rows == 0){
            echo "No results found.";
        }
        else{
            echo "<table><tr><th>Customer ID</th><th>Last Name</th><th>First Name</th><th>Address 1</th><th>Address 2</th><th>City</th><th>State</th><th>Postal Code</th><th>Country</th><th>Email</th><th>Home Phone</th><th>Cell Phone</th><th>Facebook URL</th><th>Username</th><th>Password</th><th>Salesperson ID</th>";
            for($i=0;$i<$rows;++$i){
                $row = $query_res->fetch_array(MYSQLI_NUM);
                echo "<tr>";
                for($y=0;$y<16;++$y){
                    echo "<td>".htmlspecialchars($row[$y])."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<h2>Note the <b>Customer ID</b> of the user which you wish to edit, then enter it below and click 'Edit User'</h2>";
            echo '<form method="post" action="">';
            echo '<label for="cust_id">Customer ID:</label><br>';
            echo '<input type="number" id="cust_id" name="cust_id"><br>';
            echo '<input type="submit", value="Edit User">';
            echo '</form>';
            mysqli_close($db_conn);
        }
    }
    mysqli_close($db_conn);
?>
    </body>
</html>