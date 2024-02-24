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

  <div class="m-8">
    <table class="table-fixed w-full rounded-lg shadow-md bg-neutral-800">
      <thead class="border-b">
        <tr>
          <th class="px-4 py-2 text-left font-medium text-white tracking-wider">Name</th>
          <th class="px-4 py-2 text-left font-medium text-white tracking-wider">Location</th>
          <th class="px-4 py-2 text-left font-medium text-white tracking-wider">Reason</th>
          <th class="px-4 py-2 text-left font-medium text-white tracking-wider">How many people</th>
          <th class="px-4 py-2 text-left font-medium text-white tracking-wider">Mark as Picked up</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200">Item 1</td>
          <td class="px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200">Location A</td>
          <td class="px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200">Reason X</td>
          <td class="px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200">2</td>
          <td class="px-4 py-2 border-b border-gray-200 text-sm font-light text-gray-200"><button class="ml-2 p-2 mt-2 rounded-xl bg-green-900/20 text-green-600 hover:bg-green-900/30">Picked up</button></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>