<?php
session_start();
include "config/db.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

// Only approve if not already approved
mysqli_query($conn, "
    UPDATE bookings 
    SET status='Approved' 
    WHERE id=$id AND status != 'Approved'
");

$_SESSION['success'] = "Booking approved successfully ✔";

header("Location: admin_dashboard.php");
exit();
?>