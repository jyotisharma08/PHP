<?php
if(isset($_post['name'])){



$server="localhost";
$username="root";
$password="";
$con =mysqli_connect($server,$username,$password);

if(!$con){
    die("connection failed due to" . mysqli_connect_error());
}

//databse connected;

$name=$_post['name'];
$age=$_post['age'];
$gender=$_post['gender'];
$email=$_post['email'];
$phone=$_post['phone'];
$desc=$_post['desc'];
$sql="INSERT INTO 'trip'.'trip' (``, `Name`, `age`, `gender`, `email`, `phone`, `others`, `date`) VALUES (, '$name', '$age', '$gender', '$email', '$phone', '$desc', '$date');
);";
  echo $sql;


if($con-> query($sql)== True)
 {
   echo "successful inserted";}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
 \
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="bombay iit">
    <div class="container">
        <h1>Welcome to IIT BOMBAY travel form</h1>
        <p>Enter your details to confirm your participation in trip</p>
        <p class="submittingmsg">Thanks for submitting your form we will happy to see you joining with us.</p>
        <form action="index.php" method="POST">
            <input type="text"  name="name" id="name" placeholder="enter your name">
            <input type="number"  name="age" id="age" placeholder="enter your age">
            <input type="text"  name="gender" id="gender" placeholder="enter your gender">
            <input type="text"  name="email" id="email" placeholder="enter your email">
            <input type="number"  name="phone number" id="phone number" placeholder="enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information"></textarea>
            <button class="btn">submit</button>
           
        </form>
    </div>
    <script src="index.js"></script>
    

</body>

</html>
