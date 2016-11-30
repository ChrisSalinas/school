<?php
$sql= "SELECT * FROM home ORDER BY YEAR(Date) DESC, MONTH(Date) DESC, DAY(DATE) DESC";

$result = $mysqli->query($sql);