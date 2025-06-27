<?php
require 'constants.php';

// database connection

$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (mysqli_errno($connection)) {
    die(mysqli_error($connection));
}
