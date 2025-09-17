<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>    
     <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        // Looping Pertama (Ascending)
        echo "LOOPING PERTAMA <br>";
        for ($i = 2; $i <= 20; $i+=2) {
            echo $i . " - I Love PHP <br>";
        }

        // Looping Kedua (Descending)
        echo "<br>LOOPING KEDUA <br>";
        $j = 20;
        do {
        echo $j . " - I Love PHP <br>";
        $j -= 2;
        } while ($j >= 2);

        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);

        // Array sisa bagi 5
        $rest = [];
        for ($i=0; $i < count($numbers); $i++) {
            $rest[] = $numbers[$i] % 5;
        }

        echo "<br>Array sisa baginya adalah: ";
        print_r($rest);

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];

        // Ubah jadi array asosiatif
        for ($i=0; $i < count($items); $i++) {
            $assoc = [
                "id" => $items[$i][0],
                "name" => $items[$i][1],
                "price" => $items[$i][2],
                "description" => $items[$i][3],
                "source" => $items[$i][4],
            ];
            print_r($assoc);
            echo "<br>";
        }

        echo "<h3>Soal No 4 Asterix </h3>";
        echo "Asterix:<br>";

        // Pola segitiga bintang
        for ($i=1; $i<=5; $i++) {
            for ($j=1; $j<=$i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>
