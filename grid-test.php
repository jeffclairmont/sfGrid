<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/grid.css">
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

</head>
<body>


<?php

$cols = 8;

for ($i = 1; $i <= $cols; $i++) {
    echo '<div class="sfgrid debug" style="text-align: center;">';
    for ($x = 1; $x <= $i; $x++) {
        echo '<div class="col-1-'.$i.'">'.$i.'</div>';
    }
    echo '</div>';
}
?>

<?php
for ($i = 1; $i <= $cols; $i++) {
    echo '<div class="sfgrid-margin debug" style="text-align: center;">';
    for ($x = 1; $x <= $i; $x++) {
        echo '<div class="col-1-'.$i.'">'.$i.'</div>';
    }
    echo '</div>';
}
?>

<?php
for ($i = 2; $i <= $cols; $i+=2) {
    echo '<div class="sfgrid-margin debug" style="text-align: center;">';
    for ($x = 1; $x <= $i; $x++) {
        echo '<div class="col-1-'.$i.'">'.$i.'</div>';
    }
    echo '</div>';
}
?>

<?php
for ($i = 3; $i <= $cols; $i+=3) {
    echo '<div class="sfgrid-margin debug" style="text-align: center;">';
    for ($x = 1; $x <= $i; $x++) {
        echo '<div class="col-1-'.$i.'">'.$i.'</div>';
    }
    echo '</div>';
}

?>

</body>
</html>
