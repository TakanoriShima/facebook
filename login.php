<?php
    // (C)
    session_start();
    $token = session_id();
    include_once 'views/login_view.php';