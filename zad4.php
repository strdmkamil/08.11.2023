<!DOCTYPE html>
<html>
<head>
    <title>Porównanie zmiennych</title>
</head>
<body>

<?php
$a = 14;
$b = 12;

if ($a < $b) {
    echo "$a jest mniejsze od $b";
} elseif ($a == $b) {
    echo "$a jest równe $b";
} else {
    echo "$a jest większe od $b";
}
?>

</body>
</html>