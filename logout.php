<?php
session_start();
if (isset($_SESSION['authorization'])) {
    unset($_SESSION['authorization']);
    header("Location: ./index.php");
}
