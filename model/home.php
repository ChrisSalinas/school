<?php

$sql= "SELECT * FROM schools  INNER JOIN regions ON schools.Regio_ID=regions.ID";


$result = $mysqli->query($sql);

//$result= resultToArray($result);
//
//echo '<pre>';
//print_r($result);
