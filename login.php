<?php
    // (C)
    session_start();
    $token = session_id();
    $errors = $_SESSION['errors'];
    $_SESSION['errors'] = null;
    include_once 'views/login_view.php';