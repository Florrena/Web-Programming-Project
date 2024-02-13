<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $fname = $_POST['fname'];         // First name
    $user_email = $_POST['email'];    // User email
    $phone = $_POST['phone'];         // Phone
    $address = $_POST['address'];     // Address
    $age = $_POST['age'];             // Age
    $occupation = $_POST['occupation']; // Occupation
    $experience = $_POST['experience']; // Experience with cats
    $house_type = $_POST['homeType']; // Home type
    $reasons = $_POST['adoptionReason']; // Reasons for adoption
    $comments = $_POST['additionalComments']; // Additional comments

    // Include the database connection file
    include 'db.php';

    // Check if the connection was successful
    if ($conn) {
        // Define an SQL query to insert data into the 'adoption_form' table
        $sql = "INSERT INTO adoption_form (fname, user_email, phone, address, age, occupation, experience, house_type, reasons, comments)
                VALUES ('$fname', '$user_email', '$phone', '$address', '$age', '$occupation', '$experience', '$house_type', '$reasons', '$comments')";

        // Execute the SQL query using the database connection
        if ($conn->query($sql) === TRUE) {
            // If the query was successful, display a success message
            echo "New record added";
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
