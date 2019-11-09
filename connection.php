<?php

$mysqli = new mysqli("localhost", "root", "", "registration");

if ($mysqli) {
echo "Connect<br>";
}else {
    echo "Sorry";
}

?>