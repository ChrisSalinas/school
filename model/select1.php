<?php
$sql= "SELECT * FROM home WHERE id=". $_GET['title'];
$result = $mysqli->query($sql);
print_r($result);