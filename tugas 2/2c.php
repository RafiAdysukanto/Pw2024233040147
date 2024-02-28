<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
    <style>
        td {
            background: salmon;
            border: 1px solid #000;
            padding: 20px;
        }
    </style>

</head>
<body>
    <table cellpadding="10" cellspacing="0" style="background-color: transparent;">
        <?php

            for($i = 10; $i > 0; $i--) {
                echo "<tr>";
                for($j = 1; $j <= $i; $j++) {
                    echo "<td>$j</td>";
                }
            }

        ?>
    </table>
</body>
</html>