<?php
$insert=false;
if(isset($_POST['name'])){
    $server='localhost';
    $username='root';
    $password="";
    $database='trip_demo';


    //create connection to database
    $conn=mysqli_connect($server,$username,$password,$database);

    if(!$conn){
        die("connectin to this database failed due to ".mysqli_connect_error());
    }

    // echo "Successfully connected to the db";

    $name= $_POST['name'];
    $age= $_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];

    $mysql = "INSERT INTO `trip` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Dt`) 
          VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
    // echo $mysql;

    if($conn -> query($mysql) == true){
        // echo "successfully inserted";
        $insert=true;
    }else{
        echo "Error : $mysql </br> $conn ->error ";
    }

    $conn->close();
}
?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>mini project</title>
  </head>
  <body>
    <div class="container">
      <h3>Welcome to travell form</h3>
      <p>Enter you details to confirm you participation in the trip</p>
      <?php
      if($insert == true){
      echo "<p class='submit-msg'>
        Thanks for submitting your form. we are happy to see you joining us for
        trip
      </p>";
      }
      ?>

      <form action="index.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="enter your name"
        />
        <input type="text" name="age" id="age" placeholder="enter your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="enter your gender"
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="enter your email"
        />
        <input
          type="phone"
          name="phone"
          id="phone"
          placeholder="enter your phone"
        />

        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="enter any other info here"
        >
        </textarea>
        <button class="btn">Submit</button>
        <!-- <button class="btn">Reset</button> -->
      </form>
    </div>

    <script src="index.js"></script>
  </body>
</html>
