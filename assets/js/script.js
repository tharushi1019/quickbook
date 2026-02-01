function validateForm() {
    const dateInput = document.querySelector('input[name="booking_date"]').value;
    const selectDate = new Date(dateInput);
    const today = new Date();

    today.setHours(0, 0, 0, 0); // Set to midnight for accurate comparison

    if (selectDate < today) {
        alert("Please select a valid booking date.");
        return false;
    }

    return true;
}