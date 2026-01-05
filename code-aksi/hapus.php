<?php

include '../koneksi.php'; 


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $query = "DELETE FROM transaksi WHERE id = '$id'";
    

    $hasil = mysqli_query($koneksi, $query);

   
    if ($hasil) {
      
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href='../index.php';
              </script>";
    } else {
  
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
 
    echo "ID tidak ditemukan.";
}
?>