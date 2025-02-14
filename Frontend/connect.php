include "index.php"

<?php

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "corruption_complaints"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? "Anonymous";  
    $email = $_POST['email'] ?? "Not Provided";  
    $description = $_POST['description'];

   
    $sql = "INSETR INTO complaints (name, email, description) 
            VALUES ('$name', '$email', '$description')";

  
    if ($conn->query($sql) === TRUE) {
        echo "<p>Complaint submitted successfully!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}


$conn->close();
?>
