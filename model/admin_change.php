<?php

    $title = $_POST['schoolName'];
    $id = $_POST['id2'];

    $sql = "UPDATE schools SET schoolName='" . $title . "' WHERE id='" . $id . "'";
    $result2 = $mysqli->query($sql);
if($result2 == 1){
    echo 'update is gelukt';
}
    ?>
