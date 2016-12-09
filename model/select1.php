<?php
$sql= "SELECT * FROM schools WHERE id=". $_GET['title'];
$result = $mysqli->query($sql);