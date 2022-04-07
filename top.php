<?php
    // (C)
    require_once 'filters/login_filter.php';
    require_once 'models/Post.php';
    // $posts = array();
    $posts = Post::all();
    // var_dump($posts);
    $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;

    include_once 'views/top_view.php';
