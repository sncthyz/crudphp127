
<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['user'])) {
  header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="styles.css" />
</head>

<body>
<div class="col bg-dark container col-8 mt-5 p-0  p-4  w-100 " style="height:20vh">
  <h1 class="text-white p-5 fw-bold">Home</h1>
  </div>

  <div class="card container col-8 mt-3 p-0  w-100 " style="border-radius:0  ">
    <div class="card-header bg-dark ">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active text-white " aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Murid</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
    

    <div class="card-body" style="height:30vh" >
        <h1 class="fw-bold p-3">Ini Halaman Contact</h1>
     </div>
  </div>
   
  <div class="card container bg-dark col-8 p-0 mb-5 p-4  w-100 " style="height:10vh;border-radius:0%">
  <p class="text-white p-3">Copyright @2024 by Andika</p>

  </div>
</div>
  
</body>
</html>