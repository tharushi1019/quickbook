<?php
session_start();
include "config/db.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM bookings WHERE id=$id");

$_SESSION['success'] = "Booking deleted successfully 🗑️";

header("Location: admin_dashboard.php"); // or dashboard.php
exit();
