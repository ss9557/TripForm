<?php
$insert = false;
if(isset($_POST['name'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";

    
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        echo("connection to this database failed due to".mysqli_connect_error());
    }
    //echo"Success connection to the database";

    $name =    $_POST['name'];
    $age  =    $_POST['age'];
    $gender =  $_POST['gender'];
    $email =   $_POST['email'];
    $phone =   $_POST['phone'];
    $desc =  $_POST['desc'];
    
    $sql = "INSERT INTO `spain_trip`.`trip`( `name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ( '$name',
    '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    if($con ->query($sql) == true){
        //echo "Successfully Inserted";
        $insert=true;
    }
    else{
        echo "ERROR : $sql <br> $con->error";
       
    }

    $con->close();
}
   
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg..jpg" alt="UNITED COLLEGE">
    <div class="container">
        <h3>Welcome to the United College Trip Form For Spain</h3>
        <p> Submit your details to confirm your participation in the trip</p>
        <?php
        if($insert == true){
        echo"<p class='submitMsg'>Thanks for submitting your form. We are happy to see you coming with us for the trip</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email id">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone Number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your further details">

            </textarea>
            <button class="btn">Submit</button>







        </form>
    </div>
    <script src="index.js"></script>
    
</body>

</html>