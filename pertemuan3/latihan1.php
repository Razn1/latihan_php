<?php 
// Pengulangan
// for
// while
// do.. while
// foreach : khusus array

// for( inisialisasi (variable awal); kondisi terminasi (untuk menghentikan perulangan); increment/decrement (pengulangan maju/mundur))
// for($i = 0; $i < 5; $i++) {
//     echo "Hello World! <br>";
// }

//while(kondisi) {
//    echo "Hello World! <br>";
// }
// $i = 0;
// while($i < 5) {
//     echo "Hallo Dunia! <br>";
// $i++;
// }

//do {
// 
// } while (kondisi)
// $a = 0;
// do { 
//     echo ". <br>";
//     $a++;
// } while($a < 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 For</title>
    <style>
        .warna-baris {
            background-color: royalblue;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            // for($i = 1; $i <= 3; $i++) {
            //     echo "<tr>";
            //     for($a = 1; $a <= 5; $a++) {
            //         echo "<td> $i,$a</td>";
            //     }
            //     echo "</tr>";
            // }
            for($i = 1; $i <= 5; $i++) :

        ?>
        <?php 
            if($i % 2 == 1) :
        ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
                <?php 
                for($a = 1; $a <= 5; $a++) :
                ?>
                <td> 
                    <?php 
                    echo "$i,$a" 
                    ?>
                </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 While</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            // $i = 0;
            // while($i < 3) :
            //     $i++;
        ?>
        <tr>
            <?php 
                // $a = 0;
                // while($a < 5) :
                //     $a++;            
            ?>
            <td> 
                <?php 
                    // echo "$i,$a" 
                ?>
            </td>
            <?php
                // endwhile; 
            ?>
        </tr>
        <?php 
            // endwhile; 
        ?>
    </table>
</body>
</html> -->