
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
  <h1 class="text-white p-5 fw-bold">Murid</h1>
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
    

    <div class="card-body">
      <button type="button" class="btn btn-warning mb-3"  data-bs-toggle="modal"
        data-bs-target="#modalTambah      ">Tambah</button>
      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Nim</th>
          <th>Alamat</th>
          <th>Prodi </th>
          <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $tampil = mysqli_query($koneksi,"SELECT *  FROM tmsw ORDER BY id_tmsw DESC");
        while($data = mysqli_fetch_array($tampil )) :

        ?>
        <tr>
          <td><?= $no++?></td>
          <td> <?= $data['nim']?></td>
          <td> <?= $data['nama']?></td>
          <td> <?= $data['alamat']?></td>
          <td> <?= $data['prodi']?></td>
         
          <td>
            <a href="" class="btn btn-warning"  data-bs-toggle="modal"
        data-bs-target="#modalUbah<?= $no  ?>">Ubah</a>

        <a href="" class="btn btn-primary"  data-bs-toggle="modal"
        data-bs-target="#modalHapus<?= $no  ?>">Hapus</a>
          </td>
        </tr>
        <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title" id="staticBackdropLabel">Ubah Data</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="aksi.php">
              <input type="hidden" name="id_tmsw" value="<?= $data['id_tmsw']?>">
            <div class="modal-body">
             
                <div class="mb-3">
                  <label class="form-label">NIM</label>
                  <input type="text" class="form-control" name="tnim" value="<?= $data['nim']?>" placeholder="masukkan nim">
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" name="tnama" value="<?= $data['nama']?>"placeholder="masukkan nama">
                </div>
               
                <div class="mb-3">
                  <label class="form-label">Alamat</label>
              <textarea class="form-control" name="talamat"  rows="3"><?= $data['alamat'] ?></textarea>

                </div>
                <div class="mb-3">
                  <label class="form-label">Prodi</label>
                <select class="form-select" name="tprodi">
                  <option value="<?= $data['prodi']?>"><?= $data['prodi']?></option>
                  <option value="Sastra Anime"> Sastra Anime</option>
                  <option value="Tenik Informatika"> Tenik Informatika</option>
                  <option value="Teknik Wibu"> Teknik Wibu</option>

                             </select>

                </div>  


            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary " name="bubah">Ubah</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
             
            </div>
            
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title" id="staticBackdropLabel">Hapush1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="aksi.php">
              <input type="hidden" name="id_tmsw" value="<?= $data['id_tmsw']?>">
            <div class="modal-body">
             
        
              <h5 class="text-center"> Apakah anda yakin ingin menghapus? <br>
              <span class="text-primary"><?= $data['nim']?> - <?= $data['nama']?></span></h5>
                
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary " name="bhapus">Hapus</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
             
            </div>
            
            </form>

          </div>
        </div>
      </div>

        
        
        <?php endwhile; ?>  
      </table>

      <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title" id="staticBackdropLabel">Tambah Data</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="aksi.php">
            <div class="modal-body">
             
                <div class="mb-3">
                  <label class="form-label">NIM</label>
                  <input type="text" class="form-control" name="tnim" placeholder="Masukkan nim">
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" name="tnama" placeholder="Masukkan nama">
                </div>
               
                <div class="mb-3">
                  <label class="form-label">Alamat</label>
              <textarea class="form-control" name="talamat" rows="3"></textarea>

                </div>
                <div class="mb-3">
                  <label class="form-label">Prodi</label>
                <select class="form-select" name="tprodi">
                  <option value="">Pilih Prodi</option>
                  <option value="Sastra Anime"> Sastra Anime</option>
                  <option value="Tenik Informatika"> Tenik Informatika</option>
                  <option value="Teknik Wibu"> Teknik Wibu</option>

                             </select>

                </div>  


            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary " name="bsimpan">Simpan</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
             
            </div>
            
            </form>

          </div>
        </div>
      </div>


    </div>
    

  </div>
   
  <div class="card container bg-dark col-8 p-0 mb-5 p-4  w-100 " style="height:10vh;border-radius:0%">
  <p class="text-white p-3">Copyright @2024 by Andika</p>

  </div>
</div>
  
</body>
</html>
