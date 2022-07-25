<?php

$choice = $_POST['color1'];
$choice2 = $_POST['color2'];

header("Location:First.php?color1=$choice&&color2=$choice2");