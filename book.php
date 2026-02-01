<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Service</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h2>Book a Service</h2>
<form action="submit_booking.php" method="POST" onsubmit="return validateForm()">
    <input type="text" name="name" placeholder="Your Name" required><br><br>
    <input type="email" name="email" placeholder="Your Email" required><br><br>
    <select name="service" required>
        <option value=""> Select Service </option>
        <option value="Laptop Repair">Laptop Repair</option>
        <option value="Web Consultation">Web Consultation</option>
        <option value="System Installation">System Installation</option>
    </select><br><br>
    <input type="date" name="booking_date" required><br><br>
    <button type="submit">Book Now</button>
</form>

<script src="assets/js/script.js"></script>

</body>
</html>