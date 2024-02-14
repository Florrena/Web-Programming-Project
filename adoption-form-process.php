<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Include the database connection file
    include 'db.php';

    // Retrieve form data
    $fname = $_POST['fname'];
    $user_email = $_POST['user_email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $occupation = $_POST['occupation'];
    $experience = $_POST['experience'];
    $house_type = $_POST['house_type'];
    $reasons = $_POST['reasons'];
    $comments = $_POST['comments'];
    $cat_id = $_POST['cat_id']; // Retrieve the cat_id from the form data

    // Check if the connection was successful
    if ($conn) {
        // Define the SQL query to insert data into the adoption_form table
        $sql = "INSERT INTO adoption_form (cat_id, fname, user_email, phone, address, age, occupation, experience, house_type, reasons, comments)
                VALUES ('$cat_id', '$fname', '$user_email', '$phone', '$address', '$age', '$occupation', '$experience', '$house_type', '$reasons', '$comments')";

        $sql = "DELETE FROM available_cats WHERE cat_id = '$cat_id'";

        // Execute the SQL query
        if ($conn->query($sql) === TRUE) {
            // If the query was successful, display a success message or redirect
            echo "Adoption form submitted successfully.";
            // You can redirect the user to a thank you page or another page here if needed
        } else {
            // If there was an error in the query, display an error message
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        // If the connection was not successful, display an error message
        echo "Connection failed: " . mysqli_connect_error();
    }
}
?>