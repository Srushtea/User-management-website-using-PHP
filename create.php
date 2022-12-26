<?php
     include "config.php";
     $ID = "";
     $first_name = "";
     $last_name = "";
     $email = "";
     $password ="";
     $gender="";
     if(isset($_POST['submit'])){
        if(empty($_POST['ID']) || empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['password'] )) {
            echo "Please fill all details";
        }
        else{
        $ID = $_POST['ID'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

     

     $sql = "INSERT INTO 'users' ('ID','first_name','last_name','email','password','gender') VALUES('$ID','$first_name','$last_name','$email','$password','$gender')";
     $result = "FALSE";
     $result = mysqli_query($conn, $sql);

     if($result == TRUE){
        echo "New user added successfully";

     }
     else{
        echo "Error:" . $sql . "<br>" . $conn->error;

     }
     $conn->close();
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD OPERATIONS IN PHP</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body style="margin: 50px;">


  <h2>User Data</h2>

  <form action="" method="POST" style="background-color:aliceblue ;">

    <fieldset style ="margin-left: 50px;">
      

      User ID:<br>

      <input type="text" name="id">
      <br>

      First_name:<br>

      <input type="text" name="first_name">

      <br>

      Last_name:<br>

      <input type="text" name="last_name">

      <br>

      Email:<br>

      <input type="text" name="email">

      <br>

      gender:<br>

      <input type="text" name="gender">

      <br>


      Password: <br>

      <input type="password" name="password">

      <br>
      <br>

      
      

      <input class="btn btn-success" type="submit" name="submit" value="submit" style="margin-left: 5px;">
      
    </fieldset>

  </form>
  <br>
  <a class="btn btn-secondary" href="data.php">Click here to view user data</a>

</body>

</html>
