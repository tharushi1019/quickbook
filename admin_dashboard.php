<?php
session_start();
include "config/db.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <h2>Admin Dashboard</h2>
    <a href="logout.php" class="logout">Logout</a>

    <div class="dashboard">

    <?php
    if (isset($_SESSION['success'])) {
        echo "<div class='success'>" . $_SESSION['success'] . "</div>";
        unset($_SESSION['success']);
    }
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Service</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM bookings");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['service'] . "</td>";
            echo "<td>" . $row['booking_date'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>";
                    if ($row['status'] === 'Approved') {
                        echo "<span class='action-link approve disabled'>
                                Approved
                            </span>";
                    } else {
                        echo "<a class='action-link approve'
                                href='/quickbook/approve.php?id=" . $row['id'] . "'
                                onclick=\"return confirm('Are you sure you want to approve this booking?')\">
                                Approve
                            </a>";
                    }

                    echo " 
                        <a class='action-link delete'
                            href='/quickbook/delete.php?id=" . $row['id'] . "'
                            onclick=\"return confirm('Are you sure you want to delete this booking?')\">
                            Delete
                        </a>";

                    echo "</td>";
            echo "</tr>";
        }
        ?>

    </table>
    </div>