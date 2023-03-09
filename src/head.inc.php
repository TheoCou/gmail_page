<?php

class User
{
    public $_css = "./css/main.css";
    static $_lang = ["fr", "en"];
    public $_title = "Gmail";
}

$_new_user = new User;

?>

<!DOCTYPE html>
<html lang="<?= User::$_lang[0] ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./asset/mail.png">
    <link rel="stylesheet" href="<?= $_new_user->_css ?>">

</head>
