<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $tanggal        = $_POST['tanggal'];
    $keterangan     = $_POST['keterangan'];
    $jenisTransaksi = $_POST['jenisTransaksi'];
    $jumlah         = $_POST['jumlah'];

    $query = "INSERT INTO transaksi (tanggal, keterangan, jenisTransaksi, jumlah) 
              VALUES ('$tanggal', '$keterangan', '$jenisTransaksi', '$jumlah')";
    
    $result = mysqli_query($koneksi, $query);


    if ($result) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href='index.php'; // Ganti dengan nama file tabel utamamu
              </script>";
    } else {
        echo "<script>alert('Gagal menambahkan data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/transaksi/transaksi.css">
    <title>Tambah Transaksi</title>
   
</head>
<body>

    <div class="card">
        <h2>Tambah Data Transaksi</h2>
        <form action="" method="POST">
            
            <div class="form-group">
                <label for="tanggal">Tanggal Transaksi</label>
                <input type="date" name="tanggal" required value="<?php echo date('Y-m-d'); ?>">
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" placeholder="Contoh: Beli Makan Siang" required autocomplete="off">
            </div>

            <div class="form-group">
                <label for="jenisTransaksi">Jenis Transaksi</label>
                <select name="jenisTransaksi" required>
                    <option value="" disabled selected>-- Pilih Jenis --</option>
                    <option value="Pemasukan">Pemasukan</option>
                    <option value="Pengeluaran">Pengeluaran</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah (Rp)</label>
                <input type="number" name="jumlah" placeholder="Contoh: 50000" required>
            </div>

            <div class="btn-container">
                <button type="submit" name="simpan" class="btn btn-save">Simpan</button>
                <a href="index.php" class="btn btn-cancel">Batal</a>
            </div>

        </form>
    </div>

</body>
</html>