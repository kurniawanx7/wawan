<?php

require 'function.php';
$hewan = query("SELECT * FROM hewan");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurniawan</title>
</head>

<body>
    <h1 align=center> Kurniawan</h1>

    <table align=center border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>INDEX </th>
            <th>0 </th>
            <th>1 </th>
            <th>2 </th>
            <th>3 </th>
            <th>4 </th>
            <th>5 </th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($hewan as $row) : ?>
            <tr>
                <?= $i; ?>

                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["0"] ?></td>
                <td><?php echo $row["1"] ?></td>
                <td><?php echo $row["2"] ?></td>
                <td><?php echo $row["3"] ?></td>
                <td><?php echo $row["4"] ?></td>
                <td><?php echo $row["5"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>

</html>