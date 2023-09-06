<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>No Hp</th>
        </tr>
        <?php
        
        $data = array(
            array("Fadli", "E41220464", "Kembang" , "088803716911"),
            aarray("Ragiel", "E41220291", "Blindungan" , "08231716911"),
            array("Yuwandana", "E41220432", "Kotakulon" , "08321344211"),
            array("Aditya", "E41229321", "wringin" , "0892652342341")
        );

        foreach ($data as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>" . $cell . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>