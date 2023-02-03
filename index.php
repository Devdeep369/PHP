<?php
$insert = false;
if(isset($_POST['name'])){
    // set connection variables
    $server = "localhost";
    $user = "root";
    $password = "";
    
    // create databases connection
    $conn = mysqli_connect($server, $user, $password);

    // check connection successs
    if(!$conn){
        die("CONNECTION FAILED ". mysqli_connect_error());
    }
    // echo "CONNECTION SUCCESSFUL!";

    // COLLECT POST VARIABLES
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO `form`.`students` (`name`, `email`, `age`, `gender`, `phone`, `msg`, `dt`) VALUES ('$name', '$email', '$age', '$gender', '$phone', '$msg', current_timestamp())";
    // echo $sql;

    // EXCUTE QUERY connection == object opeartor
    if($conn->query($sql) == true){
        // echo "SUCCESFULLY INSERTED!";
        // flag for successfull conection
        $insert = true;
    }
    else {
        echo "ERROR: $sql <br> $conn->error";
    }

    // close connection
    $conn->close();
} 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>PHP Website</title>
  </head>
  <body>
    <img class="img" src="bg.jpg" alt="IIT">
    <div class="container">
      <h2>Welcome to Devdeep University</h2>
      <p>Enter your Details and Submit your Participation on the Form.</p>
      <?php
      if($insert == true){
        echo "<p class='sbm'>Thanks for submitting form.</p>";
      }
       ?>
       
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your Name" require>
        <input type="email" name="email" id="email" placeholder="Enter Your Email" require>
        <input type="text" name="age" id="age" placeholder="Enter Your Age" require>
        <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
        <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Num">
        <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Enter Any Other Info Here"></textarea>
        <button class="btn">Submit</button>
    </form>

</div>

    <script src="index.js"></script>

    
  </body>
</html>
