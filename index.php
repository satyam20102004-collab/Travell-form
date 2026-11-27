
<?php

if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "satyam_travels";

    // Database connection
    $con = mysqli_connect("localhost", "root", "", "satyam_travels");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


    echo "Success! Connected to the database";

    // Getting form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $number = $_POST['number'] ?? '';
    $email = $_POST['email'];
    $description = $_POST['description'] ?? '';

    // SQL query
   $sql = "INSERT INTO `satyam` (`name`, `age`, `gender`, `email`, `number`, `description`, `dt`) 
        VALUES ('$name', '$age', '$gender', '$email', '$number', '$description', current_timestamp())";
    // Execute query
    if($con->query($sql) === true){

        echo "Successfully inserted!";

    }
    else{

        echo "ERROR: " .$sql."<br>". $con->error;

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
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <img class="bg"src="piit.image.jpeg" alt="piit noida">
    <div class="container">
       <h3>Welcome to PIIT Greater Noida </h3>
       <P>Enter your detail to confirm your participation</P>
       <p class="submitmsg">Thanks for submiting your form. we are happy to see you..</p>

      <form action="index.php" method="post">

           <input type="text" name="name" id="name" placeholder="Enter your name">
           <input type="text" name="age" id="age" placeholder="Enter your age">
           <input type="text" name="gender" id="gender" placeholder="Enter your gender">
           <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
           <input type="email" name="email" id="email" placeholder="Enter your phone email id">
           <textarea name="discription" id="discription" cols="30" rows="10" placeholder="enter any type of info"></textarea>
               <button class="button">Submit</button>
              
    </div>
    <script src="index.js"></script> 
   
</body>
</html>