<?php

    require 'koneksi.php';
    $sql=mysqli_query($koneksi,"select * from peminjam where no_identitas='$_GET[kode]'");
    $hasil=mysqli_fetch_array($sql);
?>


<h3> Tambah Peminjam </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130"> No Identitas</td>
            <td><input type="text" name="no_identitas" value="<?php echo $hasil['no_identitas'];?>"> </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"value="<?php echo $hasil['nama'];?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"value="<?php echo $hasil['alamat'];?>"></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td><input type="text" name="no_telp"value="<?php echo $hasil['no_telp'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="Proses"></td>
        </tr>
    </table>
</from>

<?php
    require 'koneksi.php';

    if(isset($_POST['proses'])){
        mysqli_query($koneksi,"update peminjam set 
       
        no_identitas = '$_POST[no_identitas]',
        nama = '$_POST[nama]',
        alamat = '$_POST[alamat]',
        no_telp = '$_POST[no_telp]'
        where no_identitas = '$_GET[kode]'");
    
        echo "Data Peminjam telah Diubah";
        echo "<meta http-equiv=refresh content=1;URL='index.php'>";
    }
?>