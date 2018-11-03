<?php

require 'connection.php';

$name = $_REQUEST['name'];
$description = $_REQUEST['description'];
$link = $_REQUEST['link'];


$sql = "INSERT INTO projects(`name`, `description`, `link`) values ('$name', '$description', '$link')";
$response = @mysqli_query($dbc, $sql);

if ($response) {
    echo ('sent');
} else {
    echo mysqli_error($dbc);
}


?>

