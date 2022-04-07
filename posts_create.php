<?php
    // (C)
    require_once 'filters/login_filter.php';
    require_once 'models/Post.php';
    $token = session_id();
    $errors = $_SESSION['errors'];
    $_SESSION['errors'] = null;
    $post = $_SESSION['post'];
    $_SESSION['post'] = null;
    if($post === null){
        $post = new Post();
    }
    include_once 'views/posts_create_view.php';