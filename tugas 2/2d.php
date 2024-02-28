
        <?php

        for ($i = 1; $i <= 5; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                if ($j % 2 == 0) {
                    $x = "white";
                } else {
                    $x = "black";
                }
                if ($i % 2 == 0) {
                    if ($j % 2 == 0) {
                        $x = "black";
                    } else {
                        $x = "white";
                    }
                } 
                echo "<td width='50' height='50' style='background-color: $x;'></td>";
            }
        }
        ?>
   