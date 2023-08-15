<?php

// Check login state
require($_SERVER["DOCUMENT_ROOT"] . "/res/php/session.php");
start_session();
require($_SERVER["DOCUMENT_ROOT"] . "/res/php/checkLogin.php");
if (!checkLogin()) header("Location: https://app.noten-app.de/account");

// Get config
require($_SERVER["DOCUMENT_ROOT"] . "/config.php");
