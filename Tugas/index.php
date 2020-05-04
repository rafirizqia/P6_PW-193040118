<?php
    require 'php/functions.php';

    if (isset($_GET['cari'])){
        $keyword = $_GET['keyword'];
        $alatmusik = query ("SELECT * FROM pw_193040118 WHERE
        img LIKE '%$keyword%'OR
        nama LIKE '%$keyword%'OR
        jenisalatmusik LIKE '%$keyword%'OR
        asal LIKE '%$keyword%'OR
        harga LIKE '%$keyword%' ");
    
    }else{
        //melakukan query 
    $alatmusik = query("SELECT * FROM pw_193040118");
    
    }

    

?>