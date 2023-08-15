<?php

// Check login state
require($_SERVER["DOCUMENT_ROOT"] . "/res/php/session.php");
start_session();
require($_SERVER["DOCUMENT_ROOT"] . "/res/php/checkLogin.php");
if (!checkLogin()) header("Location: https://app.noten-app.de/account");

// Get config
require($_SERVER["DOCUMENT_ROOT"] . "/config.php");

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev-Portal | Noten-App</title>
    <link rel="stylesheet" href="/res/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/res/fontawesome/css/regular.min.css">
    <link rel="stylesheet" href="/res/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="/res/css/fonts.css">
    <link rel="stylesheet" href="/res/css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="https://app.noten-app.de/res/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://app.noten-app.de/res/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://app.noten-app.de/res/img/favicon-16x16.png">
    <link rel="mask-icon" href="https://app.noten-app.de/res/img/safari-pinned-tab.svg" color="#eb660e">
    <link rel="shortcut icon" href="https://app.noten-app.de/res/img/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Noten-App">
    <meta name="application-name" content="Noten-App">
    <meta name="msapplication-TileColor" content="#282c36">
    <meta name="msapplication-TileImage" content="https://app.noten-app.de/res/img/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="/app.webmanifest">
    <meta name="msapplication-config" content="/browserconfig.xml">
</head>


<body>
    <nav></nav>
    <main></main>
    <footer></footer>
</body>

</html>