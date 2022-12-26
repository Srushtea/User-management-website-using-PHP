<?php

include "conn.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>View Data</title>

    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    
    <div class="container">
    <a class="btn btn-primary" href="form1.php">Add Employee</a>
        <h1>Users Data</h1>

        <table class="table">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>First Name</th>

                    <th>Last Name</th>

                    <th>Password</th>

                    <th>Email</th>

                    <th>Gender</th>

                    <th>Action</th>

                </tr>

            </thead>

            <tbody>

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>

                        <tr>

                            <td><?php echo $row['id']; ?></td>

                            <td><?php echo $row['first_name']; ?></td>

                            <td><?php echo $row['last_name']; ?></td>

                            <td><?php echo $row['password']; ?></td>
                           
                            <td><?php echo $row['email']; ?></td>

                            <td><?php echo $row['gender']; ?></td>

                            <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?del=<?php echo $row['id']; ?>">Delete</a></td>

                        </tr>

                <?php       }
                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>