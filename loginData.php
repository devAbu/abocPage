<?php

require 'connection.php';

$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];

if ($_REQUEST['task'] == "login") {

    $sql = "SELECT `email`, `password` FROM `admin` WHERE `email` = '$email'";
    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $email) {
                if ($row['password'] == $pass) {

                    echo ('success');

                } else {
                    echo ('pass');
                }
            } else {
                echo ('mail');
            }
        }
    }
}
