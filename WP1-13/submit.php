

<?php


$A = filter_input(INPUT_POST, 'A');
$B = filter_input(INPUT_POST, 'B');
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?= $A . ' + ' . $B ?> = <?= $A+$B ?> <br>
<?= $A . ' - ' . $B ?> = <?= $A-$B ?> <br>
<?= $A . ' x ' . $B ?> = <?= $A*$B ?> <br>
<?php
if ($B == 0) {
    echo "Nelze dělit nulou";
} else {
    echo $A . ' : ' . $B . ' = ' . $A/$B;
}

?>




</body>
</html>