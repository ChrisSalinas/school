<?php

    $title = $_POST['name'];
    $id = $_POST['id2'];

    $sql = "UPDATE home SET title='" . $title . "' WHERE id='" . $id . "'";
    $result2 = $mysqli->query($sql);
    ?>
