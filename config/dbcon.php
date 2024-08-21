<?php

$con = mysqli_connect("localhost", "root", "", "rosh_makeover");
if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
