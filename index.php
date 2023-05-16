<!-- Niken Irawati Putri-221052021 ?-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum Pemrograman Web</title>
</head>
<body>
<?php
    require 'koneksi.php';

    $sql = "SELECT * FROM peminjam";
    $hasil = $koneksi->query($sql);
?>
<table border="1">
    <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>No_Identitas</th>
        <th>Alamat</th>
        <th>No_Telp</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php
    if($hasil->num_rows > 0){
        $nomor = 1;
        while($baris = $hasil->fetch_assoc()){
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $baris['nama']?></td>
                    <td><?= $baris['no_identitas']?></td>
                    <td><?= $baris['alamat']?></td>
                    <td><?= $baris['no_telp']?></td>
                    <td><a href='?kode=$baris[no_identitas]'> Hapus </a></td>
                    <td><a href='peminjam-ubah.php?kode=$baris[no_identitas]'> Ubah </a></td>
                </tr>
            <?php
            $nomor++;
        }
    }
    ?>
</table>


    <?php
    if(isset($_GET['kode'])){
        mysqli_query($koneksi,"delete from peminjam where no_identitas='$_GET[kode]'");
        echo "Data Telah Terhapus";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }
?>

<br>
<?php
  require 'koneksi.php';

  $sql = "SELECT * FROM kartu_anggota";
  $hasil = $koneksi->query($sql);
?>
<table border="1">
  <tr>
      <th>Nomor</th>
      <th>Nama</th>
      <th>No_Kartu</th>
      <th>No_Identitas</th>
      <th>Alamat</th>
      <th>No_Telp</th>
  </tr>
  <?php
  if($hasil->num_rows > 0){
      $nomor = 1;
      while($baris = $hasil->fetch_assoc()){
          ?>
              <tr>
                  <td><?= $nomor ?></td>
                  <td><?= $baris['nama']?></td>
                  <td><?= $baris['no_kartu']?></td>
                  <td><?= $baris['no_identitas']?></td>
                  <td><?= $baris['alamat']?></td>
                  <td><?= $baris['no_telp']?></td>
              </tr>
          <?php
          $nomor++;
      }
  }

?>
</body>
</html>