<?php
include "koneksi.php";
if(isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO tmsw(nim,nama,alamat,prodi) 
    VALUES ('$_POST[tnim]',
    '$_POST[tnama]',
    '$_POST[talamat]',
    '$_POST[tprodi]'
    )");

    if($simpan) {
        echo "<script>
        alert('Simpan Data Sukses');
        document.location = 'index.php';
        
        </script>";
    }
        else {
            echo "<script>alert('Simpan Data Gagal');
            document.location = 'index.php';
            
            </script>";
        }
    
    }

    if(isset($_POST['bubah'])) {

        $ubah = mysqli_query($koneksi,"UPDATE  tmsw SET 
        nim = '$_POST[tnim]',
        nama = '$_POST[tnama]',
        alamat = '$_POST[talamat]',
            prodi = '$_POST[tprodi]'

            WHERE id_tmsw = '$_POST[id_tmsw]'
        
        ");


        if($ubah) {
            echo "<script>
            alert('Ubah Data Sukses');
            document.location = 'index.php';
            
            </script>";
        }
            else {
                echo "<script>alert('Ubah Data Gagal');
                document.location = 'index.php';
                
                </script>";
            }
        
        }
    
    
        if(isset($_POST['bhapus'])) {

            $hapus = mysqli_query($koneksi,"DELETE FROM tmsw WHERE id_tmsw = '$_POST[id_tmsw]'");
    
    
            if($hapus) {
                echo "<script>
                alert('Hapus Data Sukses');
                document.location = 'index.php';
                
                </script>";
            }
                else {
                    echo "<script>alert('Hapus Data Gagal');
                    document.location = 'index.php';
                    
                    </script>";
                }
            
            }
        
        
?>