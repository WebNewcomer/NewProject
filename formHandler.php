<?php

if (isset($_POST)) {
    $result = formHandler($_POST);
} else {
    $result = null;
}

function formHandler(array $array)
{
    return array_filter($array);
}

include "./index.php";