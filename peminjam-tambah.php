<h3> Tambah Peminjam </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130"> No Identitas</td>
            <td><input type="text" name="no_identitas"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td><input type="text" name="no_telp"></td>
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
        mysqli_query($koneksi,"insert into peminjam set
       
        no_identitas = '$_POST[no_identitas]',
        nama = '$_POST[nama]',
        alamat = '$_POST[alamat]',
        no_telp = '$_POST[no_telp]'");
    
        echo "Data Peminjam Baru telah Tersimpan";
    }
?>