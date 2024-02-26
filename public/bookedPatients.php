<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Booked Patients | Hospital App</title>
</head>
<body class="bg-neutral-900">
    
  <h1 class="text-3xl text-red-500 text-center">Los Santos Hospital (Booked Patients) </h1>
  <a href="../public/frontdesk.php">
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
    $sql = "SELECT * FROM book_patient";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


    echo'<div class="m-8">';

    if ($stmt->rowCount() > 0) {

    echo '<table class="table-fixed w-full rounded-lg shadow-md bg-neutral-800">';
    echo '<thead class="border-b">';
    echo '<tr>';
    echo '<th class="px-4 py-2 text-left font-medium text-white tracking-wider">First Name</th>';
    echo '<th class="px-4 py-2 text-left font-medium text-white tracking-wider">Last Name</th>';
    echo '<th class="px-4 py-2 text-left font-medium text-white tracking-wider">Booking Reason</th>';
    echo '<th class="px-4 py-2 text-left font-medium text-white tracking-wider">Date of Birth</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo'<tr>';
            echo"<td class='px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200'>" . $row['first_name'] . "</td>";
            echo"<td class='px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200'>" . $row['last_name'] . "</td>";
            echo"<td class='px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200'>" . $row['booking_reason'] . "</td>";
            echo"<td class='px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200'>" . $row['date_of_birth'] . "</td>";
            echo'</tr>';
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