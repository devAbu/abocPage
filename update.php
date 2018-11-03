<?php 

require 'connection.php';

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$description = $_REQUEST['description'];
$link = $_REQUEST['link'];

$sql = "UPDATE `projects` set `name` = '$name', `description` = '$description', `link` = '$link' where `ID` = $id";
$response = @mysqli_query($dbc, $sql);

if ($response) {
    echo ('sent');
} else {
    echo mysqli_error($dbc);
}

 ?>