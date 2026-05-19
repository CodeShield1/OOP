<?php

require_once "user.php";

$user = new User();
// // CREATE USER
// $user->createUser(
//     "mounir",
//     "mounir@gmail.com",
//     "10989"
// );


// UPDATE USER
// $user->updateUser(1, "Ali Updated", "ali@gmail.com");

// DELETE USER
// $user->deleteUser(2);
$users = $user->getUsers();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Users List</title>

    <style>

        table {

            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
        }

        th, td {

            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {

            background-color: #333;
            color: white;
        }

    </style>

</head>

<body>

    <h2 style="text-align:center;">Users List</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Created At</th>
        </tr>

        <?php foreach($users as $userData): ?>

            <tr>

                <td><?= $userData['id']; ?></td>

                <td><?= $userData['name']; ?></td>

                <td><?= $userData['email']; ?></td>

                <td><?= $userData['password']; ?></td>

                <td><?= $userData['created_at']; ?></td>

            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>