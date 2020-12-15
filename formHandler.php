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

//*****************************
/**
 * Gets linked array. Processes array's fields
 *
 * @param $array
 */
$arrayStart = [];
function someFunc(array &$array)
{
    $array['name'] = "User Name";
    $array['email'] = "User Email";
}

someFunc($arrayStart);
var_dump($arrayStart);
//****************************

//****************************
/**
 * Gets some variable $parameter.
 * Runs one of implemented functions depending on the $parameter value
 * By default, the given parameter is the empty string.
 */
$provider = "";

switch ($provider) {
    case "GMAIL":
        sendGmail();
        break;
    case "MAILRU":
        sendMailRu();
        break;
    case "YANDEX":
        sendYandex();
        break;
    default:
        echo "Unknown provider";
}

function sendGmail()
{
    echo "I send mails with Gmail server";
}

function sendMailRu()
{
    echo "I send mails with Gmail server";
}

function sendYandex()
{
    echo "I send mails with Gmail server";
}
//***************************************
