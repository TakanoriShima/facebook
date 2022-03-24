<?php
    // (C)
    session_start();
    
    $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;
    
    include_once 'views/index_view.php';