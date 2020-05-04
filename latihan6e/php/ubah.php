<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3> Form Ubah Data</h3>
<form action="" method="post">
<input type= "hidden" name="id" value="<?= $row['id']; ?>">
<ul>
    <li>
        <label for="judulbuku">Judul Buku:</label><br>
        <input type="text" name="judulbuku" id="judulbuku" required value="<?= $row ['judulbuku'];?>"  ><br><br<>
    </li>
    <li>
        <label for="img">gambar:</label><br>
        <input type="text" name="img" id="img"  required value="<?= $row ['img'];?>" ><br><br<>
    </li>
    <li>
        <label for="pengarang">Pengarang:</label><br>
        <input type="text" name="pengarang" id="pengarang"  required value="<?= $row ['pengarang'];?>" ><br><br<>
    </li>    
    <li>
        <label for="tahunterbitan">Tahun Terbitan:</label><br>
        <input type="text" name="tahunterbitan" id="tahunterbitan" required value="<?= $row ['tahunterbitan'];?>" ><br><br<>
    </li>    
    <li>
        <label for="rating">Rating:</label><br>
        <input type="text" name="rating" id="rating"  required value="<?= $row ['rating'];?>" ><br><br<>
    </li>
    <br>
    <button type="submit" name="ubah">Ubah Data</button>
    <button type="submit">
        <a href="/index.php" style=" text decoration:none; color:black;">Kembali</a>
    </button>
</ul>            
</body>
</html>

<?php

require 'functions.php';
$id = $_GET['id'];
$row = query("SELECT * FROM pw_193040118 WHERE id = $id")[0];
    if(isset($_POST['ubah'])){
        if(ubah($_POST) > 0){
            echo "<script>
                        alert('Data Berhasil diubah')
                        document.location.href = 'admin.php';
                   </script>";

        } else {
            echo "<script> 
                        alert('Data Gagal diubah')
                        document.location.href = 'admin.php';
                 </script>";
        }
    }
?>