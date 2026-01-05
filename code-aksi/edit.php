<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "nafuall"; 

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    

    $query_ambil = "SELECT * FROM transaksi WHERE id = '$id'";
    $result_ambil = mysqli_query($koneksi, $query_ambil);
    $data = mysqli_fetch_assoc($result_ambil);

 
    if (mysqli_num_rows($result_ambil) < 1) {
        die("Data tidak ditemukan...");
    }
} else {
    die("ID tidak dimasukkan...");
}


if (isset($_POST['update'])) {
    $id             = $_POST['id'];
    $tanggal        = $_POST['tanggal'];
    $keterangan     = $_POST['keterangan'];
    $jenisTransaksi = $_POST['jenisTransaksi'];
    $jumlah         = $_POST['jumlah'];

    // Query Update
    $query_update = "UPDATE transaksi SET 
                        tanggal = '$tanggal',
                        keterangan = '$keterangan',
                        jenisTransaksi = '$jenisTransaksi',
                        jumlah = '$jumlah'
                     WHERE id = '$id'";
    
    $result_update = mysqli_query($koneksi, $query_update);

    if ($result_update) {
        echo "<script>
                alert('Data berhasil diupdate!');
                window.location.href='../index.php'; 
              </script>";
    } else {
        echo "<script>alert('Gagal mengupdate data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit/edit.css">
    <title>Edit Transaksi</title>
</head>
<body>

    <div class="card">
        <h2>Edit Data Transaksi</h2>
        
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

            <div class="form-group">
                <label>Tanggal Transaksi</label>
                <input type="date" name="tanggal" required value="<?php echo $data['tanggal']; ?>">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" required value="<?php echo $data['keterangan']; ?>">
            </div>

            <div class="form-group">
                <label>Jenis Transaksi</label>
                <select name="jenisTransaksi" required>
                    <option value="">-- Pilih Jenis --</option>
                    <option value="Pemasukan" <?php if($data['jenisTransaksi'] == 'Pemasukan') echo 'selected'; ?>>Pemasukan</option>
                    <option value="Pengeluaran" <?php if($data['jenisTransaksi'] == 'Pengeluaran') echo 'selected'; ?>>Pengeluaran</option>
                </select>
            </div>

            <div class="form-group">
                <label>Jumlah (Rp)</label>
                <input type="number" name="jumlah" required value="<?php echo $data['jumlah']; ?>">
            </div>

            <div class="btn-container">
                <button type="submit" name="update" class="btn btn-update">Update Data</button>
                <a href="../index.php" class="btn btn-cancel">Batal</a>
            </div>
        </form>
    </div>

</body>
</html>