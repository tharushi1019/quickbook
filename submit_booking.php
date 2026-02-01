<?php
include "config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $booking_date = $_POST['booking_date'];

    $query = "INSERT INTO bookings (name, email, service, booking_date) 
              VALUES ('$name', '$email', '$service', '$booking_date')";

    $success = mysqli_query($conn, $query);
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Status</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h2>Booking Status</h2>

<div class="dashboard">

<?php if ($success): ?>
    <div class="success">
        Booking submitted successfully! 🎉
    </div>

    <p style="text-align:center; font-size:16px;">
        Thank you, <strong><?php echo htmlspecialchars($name); ?></strong>.<br>
        We have received your booking for  
        <strong><?php echo htmlspecialchars($service); ?></strong> on  
        <strong><?php echo htmlspecialchars($booking_date); ?></strong>.
    </p>

    <br>
    <a href="book.php" class="action-link approve" style="display:block; text-align:center;">
        Make another booking
    </a>

<?php else: ?>
    <div class="success" style="background:#ffecec;color:#b71c1c;">
        Error submitting booking. ❌
    </div>

    <p style="text-align:center;">
        Please try again later.
    </p>
<?php endif; ?>

</div>

</body>
</html>
