<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/style2.css">
</head>
<body>
<h3> Form Tambah Data Buku</h3>
<form action="" method="post">


        <label for="judulbuku">Judul Buku:</label><br>
        <input type="text" name="judulbuku" id="judulbuku" required><br><br<>
    
        <label for="img">Gambar:</label><br>
        <input type="text" name="img" id="img" required><br><br<>
    
        <label for="pengarang">Pengarang:</label><br>
        <input type="text" name="pengarang" id="pengarang" required><br><br<>
   
        <label for="tahunterbitan">Tahun Terbitan:</label><br>
        <input type="text" name="tahunterbitan" id="tahunterbitan" required><br><br<>
    
        <label for="rating">Rating:</label><br>
        <input type="" name="rating" id="rating" required><br><br<>
    
    <br>
    <button type="submit" name="tambah">Tambah Data</button>
    <button type="submit">
        <a href="index.php" style=" text decoration:none; color:black;">Kembali</a>
    </button>
         
</body>
</html>

<?php

require 'functions.php';
    if(isset($_POST['tambah'])){
        if(tambah($_POST) > 0){
            echo "<script>
                        alert('Data Berhasil ditambahkan')
                        document.location.href = 'admin.php';
                   </script>";

        } else {
            echo "<script> 
                        alert('Data Gagal ditambahkan')
                        document.location.href = 'admin.php';
                 </script>";
        }
    }
?>