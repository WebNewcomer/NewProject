<?php
session_start();
if (isset($_SESSION['authorization'])) {
    echo $_SESSION['authorization'];
    unset($_SESSION['authorization']);
    header("Location: ./index.php");
}
else { echo "No session";}
