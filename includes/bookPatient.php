<?php

$host = 'localhost';
$dbname = 'hospital-app';
$username = 'root';
$password = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Validate and sanitize user input
  $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
  $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
  $booking_reason = filter_input(INPUT_POST, 'booking_reason', FILTER_SANITIZE_SPECIAL_CHARS);
  $date_of_birth = filter_input(INPUT_POST, 'date_of_birth', FILTER_SANITIZE_SPECIAL_CHARS);

  // Prepare and execute SQL statement
  $sql = "INSERT INTO book_patient (first_name, last_name, booking_reason, date_of_birth) VALUES (:first_name, :last_name, :booking_reason, :date_of_birth)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":first_name", $first_name);
  $stmt->bindParam(":last_name", $last_name);
  $stmt->bindParam(":booking_reason", $booking_reason);
  $stmt->bindParam(":date_of_birth", $date_of_birth);
  $stmt->execute();

  echo "";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} finally {
  // Close the connection
  $pdo = null;
}

header("Location: ../index.php");
?>
