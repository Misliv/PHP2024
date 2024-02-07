<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <style>
    </style>
</head>
<body>
<?php
$spartelkuikens = 25;
$waterbuffels = 32;
$plonsmderin = 11;
$bommetje = 23;

$clubs = array("De spartelkuikens", "De waterbuffels", "Plonsmderin", "Bommetje");
$zwemmers = array($spartelkuikens, $waterbuffels, $plonsmderin, $bommetje);

function DeEcho($number) {
    for ($i = 0; $i < $number; $i++) {
        echo "<img src='../img/zwemmer.png'>";
    }
}
foreach ($clubs as $club) {
    foreach ($zwemmers as $zwem) {
        echo "<br>" . $club . " " . $zwem . "";

        switch ($zwem) {
            case $zwem < 5:
                DeEcho(0);
                break;

            case $zwem < 10:
                DeEcho(1);
                break;

            case $zwem < 15:
                DeEcho(2);
                break;

            case $zwem < 20:
                DeEcho(3);
                break;

            case $zwem < 25:
                DeEcho(4);
                break;

            case $zwem < 30:
                DeEcho(5);
                break;

            case $zwem < 35:
                DeEcho(6);
                break;
        }
    }
}
?>
</body>
</html>