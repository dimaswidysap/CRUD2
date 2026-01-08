<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/table/table.css">
    <title>Home</title>
</head>
<body>

    <section class="dnuyiha">
        <a href="landing-page.html">Log Out</a>
    </section>

    <main class="main-container">
        <section class="tambah-transaksi">
            <a href="tambah-transaksi.php"><span></span><span>Tambah Transaksi</span></a>
        </section>
        
        <section class="container-table">
            <table>
                <tr class="adiedja">
                    <td>Tanggal Transaksi</td>
                    <td>Keterangan</td>
                    <td>JenisTransaksi</td>
                    <td>Jumlah</td>
                    <td>Aksi</td>
                </tr>

 <?php
          include 'koneksi.php';

          $query = "SELECT * FROM transaksi";
                $result = mysqli_query($koneksi, $query);

          if (!$result) {
              echo "<tr><td colspan='6'>Error: " . mysqli_error($koneksi) . "</td></tr>";
          } elseif (mysqli_num_rows($result) == 0) {
              echo "<tr><td colspan='6' style='text-align:center;'>Tidak ada data barang yang cocok.</td></tr>";
          } else {
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <tr class="table-transaksi">
                  <td><?= $row['tanggal']; ?></td>
                  <td><?= $row['keterangan']; ?></td>
                  <td><?= $row['jenisTransaksi']; ?></td>
                  <td>Rp <?= number_format($row['jumlah'], 0, ',', '.'); ?></td>
                <td class="adnieg">
                    <!-- edit -->
                    <a class="link-aksi" href="code-aksi/edit.php?id=<?php echo $row['id']; ?>"  >
                 <span></span>
                <span>Edit</span>
                </a>
                <!-- hapus -->
                <a class="link-aksi" 
                                         href="code-aksi/hapus.php?id=<?php echo $row['id']; ?>" 
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
    
                              <span></span>
                          <span>Hapus</span> 
                        </a>
                
                </td>
              </tr>
          <?php
              }
          }
          ?>
            </table>
        </section>        
    </main>


    <script type="module" src="./js/nav.js"></script>
</body>
</html>