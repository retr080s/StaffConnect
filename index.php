<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hospital App</title>
</head>
<body class="bg-neutral-900">
    
  <h1 class="text-3xl text-red-500 text-center">Los Santos Hospital </h1>

  <div class="grid h-screen place-items-center">
    <a href="public/driver.php">
      <div class="dark:bg-neutral-900/50 dark:bg-gradient-to-bl from-red-950/50 via-transparent rounded-lg shadow-xl p-20 dark:ring-1 dark:ring-inset dark:ring-red-500/10 hover:shadow-red-900/30">
        <i class="fa fa-car" style="font-size:60px;color:red;"></i>
        <h4 class="text-center text-white">Driver</h4>
      </div>
    </a>

    <a href="public/frontdesk.php">
      <div class="dark:bg-neutral-900/50 dark:bg-gradient-to-bl from-red-950/50 via-transparent rounded-lg shadow-xl p-20 dark:ring-1 dark:ring-inset dark:ring-red-500/10 hover:shadow-red-900/30">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="red" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
        <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5M12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0M1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25"/>
      </svg>
        <h4 class="text-center text-white">Desk</h4>
      </div>
    </a>
  </div>

<style>
.grid {
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
}
</style>

</body>
</html>