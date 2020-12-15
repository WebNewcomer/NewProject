<?php
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
