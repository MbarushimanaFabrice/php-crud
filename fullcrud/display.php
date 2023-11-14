<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
<link rel="stylesheet" href="style.css"> 
</head>

<body>
    <a href="index.php">Add user</a>


    <table>
        <?php
        $sql = "SELECT * FROM `info`";
        $query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $row['fname'] ?></td>
                <td><?php echo $row['lname'] ?></td>
                <td><?php echo $row['location'] ?></td>
                <td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
                <td><a href="update.php?id=<?php echo $row['id'] ?>">Update</a></td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>