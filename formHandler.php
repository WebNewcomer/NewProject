<?php

session_start();

if (isset($_POST)) {
    $result = formHandler($_POST);
} else {
    $result = null;
}

/* Processes auth data from $_POST */
function formHandler(array $array)
{
    /* Input data clearing */
    $name = htmlentities($_POST['firstName']);
    $pass = htmlentities($_POST['password']);

    if ($name == "user" && $pass == "test") {
        $_SESSION['authorization'] = "user";
    }
    return array_filter($array);
}
if (isset($_SESSION['authorization']) && $_SESSION['authorization'] == "user") {
    include "./authorized.php";
} else {
    include "./index.php";
}
//*****************************

