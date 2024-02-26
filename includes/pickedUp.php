<?php

$host = "localhost";
$dbname = "hospital-app";
$username = "root";
$password = "";

try {
  // Connect to the database
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Check if ID is received
  if (isset($_POST['id'])) {
    $id = (int) $_POST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM needs_a_pickup WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->execute();

    // Redirect to the main page after deletion
    header("Location: ../public/driver.php"); 
    exit();
  } else {
    echo "Error: No ID provided.";
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} finally {
  // Close the connection
  $conn = null;
}

?>