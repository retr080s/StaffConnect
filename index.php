<?php 
include 'includes/pdo.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Hospital App</title>
</head>
<body class="bg-neutral-900">
    
  <h1 class="text-3xl text-red-500 text-center">Los Santos Hospital </h1>

  <div class="grid h-screen place-items-center">
    <a href="public/driver.php">
      <div class="bg-neutral-600 rounded-lg shadow-md p-6 dark:ring-1 dark:ring-inset dark:ring-red-500">
        <img src="image1.jpg" alt="Image 1">
        <h4 class="text-center">Driver</h4>
      </div>
    </a>

    <a href="public/frontdesk.php">
      <div class="bg-neutral-600 rounded-lg shadow-md p-6 dark:ring-1 dark:ring-inset dark:ring-red-500">
        <img src="image2.jpg" alt="Image 2">
        <h4 class="text-center">Desk</h4>
      </div>
    </a>
  </div>

<?php 

$sql = "SELECT * FROM book_patient";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch results
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Print data
foreach ($result as $row) {
  echo "ID: " . $row["id"] . ", Name: " . $row["first_name"] . "<br>";
}
?>


<style>
.grid {
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
}
</style>

</body>
</html>