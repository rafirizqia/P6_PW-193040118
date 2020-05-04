<?php
//menghubungkan dengan file php lainnya
require 'functions.php';

//melakukan query 
$buku = query("SELECT * FROM pw_193040118");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/style1.css">

</head>
<body>
     <a href="tambah.php">Tambah data</a>
     
    <table border="1" cellpadding="13" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Opsi</th> 
        <th>Gambar</th> 
        <th>Judul Buku</th> 
        <th>Pengarang</th>    
        <th>Tahun Terbitan</th> 
        <th>Rating</th>
    </tr>
<?php $i = 1; ?>
<?php foreach ($buku as $row): ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row['id']; ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin mau di hapus')">
            <button>Hapus</button></a>
        </td>
        <td><img src="../Assets/img/<?= $row['img']; ?>" width="150" alt=""></td>
        <td><?= $row ['judulbuku']; ?></td>
        <td><?= $row ['pengarang']; ?></td>
        <td><?= $row ['tahunterbitan']; ?></td>
        <td><?= $row ['rating']; ?></td>
    </tr>
    <?php $i++;?>
<?php endforeach;?>
</table>
    </div>
    
</body>
</html>