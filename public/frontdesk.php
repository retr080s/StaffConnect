

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Front Desk | Hospital App</title>
</head>
<body class="bg-neutral-900">
    
  <h1 class="text-3xl text-red-500 text-center">Los Santos Hospital (Front Desk) </h1>
  <a href="../index.php">
    <button class="ml-2 p-2 mt-2 rounded-xl bg-red-900/20 text-red-600 hover:bg-red-900/30">Go Back</button>
  </a>
  <a href="../public/bookedPatients.php">
  <button class="ml-2 p-2 mt-2 rounded-xl bg-green-900/20 text-green-600 hover:bg-green-900/30">Booked Patients</button>
  </a>

<div class="mt-8 m-8">
  <h2 class="text-white">Book a patient</h2>
  <form action="../includes/bookPatient.php" method="post" class="shadow-2xl rounded-md mt-4 grid grid-cols-1 md:grid-cols-3 gap-x-4 items-center w-full dark:bg-neutral-800 dark:text-gray-200">
    <div>
      <label for="first_name" class="block text-sm font-bold mb-1">Name</label>
      <input type="text" id="first_name" name="first_name" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:ring-red-500 focus:ring-opacity-50 dark:bg-neutral-700 dark:text-white" placeholder="Enter first name">
    </div>
    <div>
      <label for="last_name" class="block text-sm font-bold mb-1">Last Name</label>
      <input type="text" id="last_name" name="last_name" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:ring-red-500 focus:ring-opacity-50 dark:bg-neutral-700 dark:text-white" placeholder="Enter last name">
    </div>
    <div>
      <label for="booking_reason" class="block text-sm font-bold mb-1">Booking Reason</label>
      <input type="text" id="booking_reason" name="booking_reason" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:ring-red-500 focus:ring-opacity-50 dark:bg-neutral-700 dark:text-white" placeholder="Enter booking reason">
    </div>
    <div>
      <label for="date_of_birth" class="block text-sm font-bold mb-1">DOB (Date of Birth)</label>
    <input type="date" id="date_of_birth" name="date_of_birth" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:ring-red-500 focus:ring-opacity-50 dark:bg-neutral-700 dark:text-white" placeholder="YYYY-MM-DD">
  </div>
  <div class="col-span-3 pt-4">
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-900 text-white font-bold rounded shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400">
      Submit
    </button>
  </div>
</form>
</div>

<div class="ring-1 ring-red-500/50 m-8"></div>

<div class="mt-12 m-8">
  <h2 class="text-white">Needs a pick up</h2>
  <form action="../includes/needPickup.php" method="post" class="shadow-2xl rounded-md mt-4 grid grid-cols-1 md:grid-cols-3 gap-x-4 items-center w-full dark:bg-neutral-800 dark:text-gray-200">
    <div>
      <label for="name" class="block text-sm font-bold mb-1">Name</label>
      <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:ring-red-500 focus:ring-opacity-50 dark:bg-neutral-700 dark:text-white" placeholder="Enter first name">
    </div>
    <div>
      <label for="location" class="block text-sm font-bold mb-1">Location</label>
      <input type="text" id="location" name="location" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:ring-red-500 focus:ring-opacity-50 dark:bg-neutral-700 dark:text-white" placeholder="Enter location">
    </div>
    <div>
      <label for="reason" class="block text-sm font-bold mb-1">Reason</label>
      <input type="text" id="reason" name="reason" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:ring-red-500 focus:ring-opacity-50 dark:bg-neutral-700 dark:text-white" placeholder="Enter pickup reason">
    </div>
    <div>
      <label for="how_many_people" class="block text-sm font-bold mb-1">How many People</label>
      <input type="number" id="how_many_people" name="how_many_people" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:ring-red-500 focus:ring-opacity-50 dark:bg-neutral-700 dark:text-white" placeholder="Enter how many people need to be picked up">
    </div>
  <div class="col-span-3 pt-4">
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-900 text-white font-bold rounded shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400">
      Submit
    </button>
  </div>
</form>
</div>

</body>
</html>