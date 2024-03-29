<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Driver | Hospital App</title>
</head>
<body class="bg-neutral-900">
    
  <h1 class="text-3xl text-red-500 text-center">Los Santos Hospital (Drivers) </h1>
  <a href="../index.php">
    <button class="ml-2 p-2 mt-2 rounded-xl bg-red-900/20 text-red-600 hover:bg-red-900/30">Go Back</button>
  </a>

  <?php



  // Database connection details
  $host = "localhost";
  $dbname = "hospital-app";
  $username = "root";
  $password = "";

  try {
    // Connect to the database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL query
    $sql = "SELECT * FROM needs_a_pickup";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


    echo'<div class="m-8">';

    if ($stmt->rowCount() > 0) {

    echo '<table class="table-fixed w-full rounded-lg shadow-md bg-neutral-800">';
    echo '<thead class="border-b">';
    echo '<tr>';
    echo '<th class="px-4 py-2 text-left font-medium text-white tracking-wider">Name</th>';
    echo '<th class="px-4 py-2 text-left font-medium text-white tracking-wider">Location</th>';
    echo '<th class="px-4 py-2 text-left font-medium text-white tracking-wider">Reason</th>';
    echo '<th class="px-4 py-2 text-left font-medium text-white tracking-wider">How many people</th>';
    echo '<th class="px-4 py-2 text-left font-medium text-white tracking-wider">Mark as Picked up</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo"<tr>";
            echo"<td class='hidden'>" . $id = $row['id'] . "</td>";
            echo"<td class='px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200'>" . $row['name'] . "</td>";
            echo"<td class='px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200'>" . $row['location'] . "</td>";
            echo"<td class='px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200'>" . $row['reason'] . "</td>";
            echo"<td class='px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200'>" . $row['how_many_people'] . "</td>";
            echo"<td class='px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200'><form action='../includes/pickedUp.php' method='post'><input type='hidden' name='id' value='$id'> <button class='ml-2 p-2 mt-2 rounded-xl bg-green-900/20 text-green-600 hover:bg-green-900/30' type='submit'>Picked Up</button></form></td>";
            echo"</tr>";
          }      
    echo'</tbody>';
    echo'</table>';
    echo'</div>';
    } else {
      echo "No data found";
    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  } finally {
    $conn = null;
  }
  ?>

</body>
</html>