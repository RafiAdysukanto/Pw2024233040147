<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>

</head>

<body>
    
    <?php
    $namaDepan = "Rafi"
    $namaBelakang = "Adyatma"

    $1 = 1;
    while ($i <= 100) {
        if ($i % 3 === 0) {
            if ($i % 3 === 0 && $i % 5 === 
    0)  {
                echo $namaDepan . " " .
            $namaBelakang . "<br />";    
    }  else {
        echo $namaDepan . "<br />";
    }
        } elseif ($i % 5 === 0) {
            echo $namaBelakang . "<br />";
        } else {
            echo $i . "<br />";
        }
        $i++;
    }

    ?>

</body>
</html>