<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040118") or die ("Database salah!");

    return $conn;
}
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();
    
    $nama = htmlspecialchars($data['judulbuku']);
    $img = htmlspecialchars($data['img']);
    $jenisalatmusik = htmlspecialchars($data['pengarang']);
    $asal = htmlspecialchars($data['tahunterbitan']);
    $harga = htmlspecialchars($data['rating']);

    $query = "INSERT INTO pw_193040118
                VALUES
                ('','$img','$judulbuku','$pengarang','$tahunterbitan', '$rating')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
   $conn= koneksi();
   mysqli_query($conn, "DELETE FROM pw_193040118 WHERE id=$id") ;
   return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['judulbuku']);
    $img = htmlspecialchars($data['img']);
    $jenisalatmusik = htmlspecialchars($data['pengarang']);
    $asal = htmlspecialchars($data['tahunterbitan']);
    $harga = htmlspecialchars($data['rating']);

    $query = "UPDATE pw_193040118
            SET 
            judulbuku = '$judulbuku',
            gambar = '$img',
            pengarang = '$pengarang',
            tahunterbitan = '$tahunterbitan',
            rating = '$rating'
            WHERE  id = '$id'
            ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}