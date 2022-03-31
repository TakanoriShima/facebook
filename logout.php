<?php
    session_start();
    $_SESSION['login_user'] = null;
    $_SESSION['flush'] = 'ログアウトしました';
    header('Location: index.php');
    exit;