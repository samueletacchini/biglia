<?php
$USER = "admin";
$PASSWORD = "admin";

if (isset($_POST["user"]) && isset($_POST["password"])) {
    $user = $_POST["user"];
    $passsword = $_POST["password"];

    if ($user == $USER && $passsword == $PASSWORD) {
        include 'viewManage.php';
    } else {
        header("Location: index.php?pwd=1");
    }
} else {
    echo "Ci hai provato STRONZO";
}
?>