<?php

include "config.php";

if (isset($_POST['update'])) {

    $emp_id = $_POST['id'];
    
    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $password = $_POST['password'];
    
    $email = $_POST['email'];
    
    $gender = $_POST['gender'];

    $sql = "UPDATE `employee1` SET `first_name`='$first_name',`last_name`='$last_name',`password`='$password','email'='$email','gender'='$gender' WHERE `id`='$id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Record updated successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {

    $emp_id = $_GET['id'];

    $sql = "SELECT * FROM `users` WHERE `id`='$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $emp_id = $row['id'];

            $first_name = $row['first_name'];

            $last_name = $row['last_name'];

            $password  = $row['password'];
           
            $email = $row['email'];
            
            $gender = $row['gender'];
        }

?>




        <!DOCTYPE html>
        <html>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <body>
            <h2>User Update Form</h2>

            <form action="" method="post">

                <fieldset>

                    First name:<br>

                    <input type="text" name="first_name" value="<?php echo $first_name; ?>">

                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <br>

                    Last name:<br>

                    <input type="text" name="last_name" value="<?php echo $last_name; ?>">

                    <br>



                    Password:<br>

                    <input type="password" name="password" value="<?php echo $password; ?>">

                    <br>

                    Email:<br>

                    <input type="email" name="email" value="<?php echo $email; ?>">

                    <br>

                    Gender:<br>

                    <input type="gender" name="gender" value="<?php echo $gender; ?>">

                    <br>


                    <input type="submit" value="update" name="update">

                </fieldset>

            </form>
           <button class="btn btn-light"> <a  href="data.php">View User data</a></button>

        </body>

        </html>



<?php

    } else {

        header('Location: data.php');
    }
}

?>