<?php 
require 'connection.php';

$id = $_REQUEST['id'];
echo $id;

$sql = "DELETE from `projects` where `ID` = $id";
$response = @mysqli_query($dbc, $sql);

if ($response) {
    header('location:adminAdd.php');
} else {
    echo mysqli_error($dbc);
}
 ?>