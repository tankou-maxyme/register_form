
<?php

require_once __DIR__."/database.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){

$firstname =$_POST["firstname"];
$lastname =$_POST["lastname"];
$email = $_POST["email"];
$matricule =$_POST["matricule"];


$statement = $connection->prepare("INSERT INTO students(firstname, lastname, email, matricule)
VALUES(?,?,?,?)");
$statement->bind_param("ssss", $firstname, $lastname, $email, $matricule );

if($statement->execute()){
    echo "Student added succesfully";
}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>Add students</h1>


    <br> <br> <br>

    <form method="POST">
      <div class="items">
        <label for="firstname">First Name :</label>
        <input type="text" name="firstname" placeholder="Enter first name">
    
    </div></br></br>

    <div class="items">
        <label for="lastname">Last Name :</label>
        <input type="text" name="lastname" placeholder="Enter last name">
    
    </div></br></br>

    <div class="items">
        <label for="email">EMAIL :</label>
        <input type="email" name="email" placeholder="Enter Email :">
    
    </div></br></br>

    <div class="items">
        <label for="matricule">MATRICULE:</label>
        <input type="text" name="matricule" placeholder="Enter matricule">
    
    </div></br></br>

    <button type="Submit">Add student</button>
    </form>
</body>
</html>