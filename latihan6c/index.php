<?php
    require 'php/functions.php';

    $buku = query("SELECT * FROM pw_193040104")

?>

<html>
    <head>
       

        <title>19304118</title>
        <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
       

    </head>
    
    <body>
    <div class="container">
        <?php foreach ($buku as $row) :?>
            <p class="tipe">
                 <a href="php/detail.php?id=<?= $row['id'] ?>">
                    <?= $row["judulbuku"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
    </div>
    
</body>
</html>