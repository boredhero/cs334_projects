<!DOCTYPE html><html><head><link rel="stylesheet" href="bleh.css"><title>Lab 6</title><h1>Lab 6</h1></head>
<?php if (!empty($_POST)):  ?>
    <?php
    $height = filter_input(INPUT_POST, "height");
    $weight = filter_input(INPUT_POST, "weight");
    $height_meters = $height*0.0254;
    $weight_kilos = $weight/2.2046;
    $bmi = $weight_kilos/($height_meters**2);
    $bmi_status;
    if($bmi < 18.5){
        $bmi_status = "underweight";
    }
    else if($bmi < 24.9){
        $bmi_status = "normal";
    }
    else if($bmi < 29.9){
        $bmi_status = "overweight";
    }
    else if(29.9 < $bmi){
        $bmi_status = "obese";
    }
    ?>
    Your BMI is <b><?php echo$bmi?></b>.<br>Based on the BMI Evaluation Guide, you are considered <b><?php echo $bmi_status?></b>.<br><br>This form is not a substitute for medical advice.<br><br>
    <body>
        Please Help by Giving us Feedback!<br>
        <form action="lab6feedback.php" method="post">
            <label>First Name: <input type="text" name="first_name"><br></label>
            <label>Last Name: <input type="text" name="last_name"><br><label>
            <label>Feedbackon BMI Calculation Results:<br>
            <textarea name="feedback" rows="20" cols="60"></textarea><label>
            <input type="submit"></input>
        </form>
    </body>
<?php else: ?>
    <form name="initial_form" action ="" method ="post">
            <label>Height: <input type="number" name="height" min="0" max="150"><br></label>
            <label>Weight: <input type="number" name="weight" min="0" max="1400"><br></label> <?php # This is based on the weight of the heavist human EVER ?>
            <input type="submit" name="submit"></input>
    </form>
<?php endif; ?>
<h3><a href="http://nfm7.epizy.com/lab6/srcviewer.php">View src</a></h3>
<h3><a href="http://nfm7.epizy.com/">View All Assignments</h3>