<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1>Asas php</h1>
     

    <?php 
    //komen satu baris
    #komen satu baris
    /*

    komen byk baris
    
    */

    $namapelajar="Ali";
    echo "<h2>Hello $namapelajar</h2>";
    $namapelajar="Hidayati";
    $umur= 20;
    echo "<h2>Hello $namapelajar umur $umur</h2>";

    $Nokp='0112233445566';

    $x = 10;
    $y='12';

    if ($x != $y) {
        echo 'Tak sama';
    } else {
        echo 'masih sama';
    }

     ?>
     <p>
         <?php echo 20 . 21 ?>

     </p>

     <p>
         <?php
         $bandar = 'Pasir gudang';
         $baru= 'bandar: ';

         for($x = 0; $x < strlen($bandar); $x++) {
             $baru .= $bandar[$x] . '';
         }

         echo $baru;
         ?>

     </p>
</body>
</html>