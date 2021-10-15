<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ol>

<?php
$runners[0] = "Martin Kokes"; // is the best :D
$runners[1] = "Zuzka";
$runners[2] = "Martin"; // is the best :D
$runners[3] = "Honza";
$runners[4] = "Filip"; // is the best :D
$runners[5] = "Ondra";
$runners[6] = "Jarda"; // is the best :D
$runners[7] = "Alex";
$runners[8] = "Matej"; // is the best :D
$runners[9] = "Dan";
?>


<?php
    echo count($runners); // =2
?>

<?php
for ($i = 0; $i < count($runners); $i++) {
    echo "<li> $runners[$i]  </i>";
}
?>
</ol>


</body>
</html>