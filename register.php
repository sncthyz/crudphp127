
<?php
session_start();
include "jaringan.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php

  

    if(isset($_POST['username'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($jaringan, "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password')");
        if($query) {
        echo '<script>alert("Pendaftaran berhasil,gas login")
         location.href = "login.php";
         </script>';
     
    } else {
       echo '<script>alert("Yah Gagal")</script>';
    
    }
    }

    ?>



<div class="container col-md-3 mt-5 mb-3 bg-light p-5 w-100 " style="height:80vh;border-radius:1%;">
    <h1 class=" fw-bold text-center" style="margin-top:100px; font-size:80px;">Register</h1>
    
    <form action="" method="post" style="margin-top:100px;">
    <div class="form-group">
            <label for="username" class="fw-bold" >Nama</label>
            <input type="nama" class="form-control" id="username" name="nama" placeholder="Masukkan nama..." required>
        </div>
        <div class="form-group">
            <label for="username" class="fw-bold" >Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username..." required>
        </div>
        <div class="form-group">
            <label for="password" class="fw-bold" >Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password..." required>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mt-5 col-lg-3 p-3 w-50 fw-bold fs-4">Login</button>
        </div>
        <div class=" d-flex justify-content-center mt-3 gap-2">
            Already have an account? <a href="login.php" >Login</a>
        </div>
    </form>
</div>
</body>
</html>
