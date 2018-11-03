<?php

require 'connection.php';

$name = $_REQUEST['name'];
$description = $_REQUEST['description'];
$link = $_REQUEST['link'];


    $sql = "INSERT INTO projects('name', 'description', 'link')";
    $result = $dbc->query($sql);

  
    ?>

