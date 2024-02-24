<?php

$host = 'localhost';
$dbname = 'hospital-app';
$username = 'root';
$password = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Validate and sanitize user input
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_SPECIAL_CHARS);
  $reason = filter_input(INPUT_POST, 'reason', FILTER_SANITIZE_SPECIAL_CHARS);
  $how_many_people = filter_input(INPUT_POST, 'how_many_people', FILTER_SANITIZE_SPECIAL_CHARS);

  // Prepare and execute SQL statement
  $sql = "INSERT INTO needs_a_pickup (name, location, reason, how_many_people) VALUES (:name, :location, :reason, :how_many_people)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":location", $location);
  $stmt->bindParam(":reason", $reason);
  $stmt->bindParam(":how_many_people", $how_many_people);
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
