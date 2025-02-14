<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? "Anonymous"; 
    $email = $_POST['email'] ?? "Not Provided";
    $description = $_POST['description'];

    
    $sql = "INSERT INTO complaints (name, email, description) 
            VALUES ('$name', '$email', '$description')";

   
    if ($conn->query($sql) === TRUE) {
        echo "<p>Complaint submitted successfully!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="goback.php" method="post">
        <input type="submit" value="Go Back">
    </form>
</body>
</html>
