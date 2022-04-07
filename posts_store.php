<?php
    // (C)
    // var_dump($_POST);
    // var_dump($_FILES);
    require_once 'filters/login_filter.php';
    require_once 'filters/csrf_filter.php';
    require_once 'models/Post.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    
    $post = new Post($login_user->id, $title, $content, $image);
    // var_dump($post);
    
    $errors = $post->validate();
    // var_dump($errors);
    if(count($errors) === 0){
        if($post->upload()){
            $flush = $post->save();
            if($flush === ''){
                $_SESSION['errors'] = array('なんらかの理由で投稿に失敗しました');
                $_SESSION['post'] = $post;
                header('Location: posts_create.php');
                exit;
            }else{
                $_SESSION['flush'] = $flush;
                header('Location: top.php');
                exit;
            }
        }
    }else{
        $_SESSION['errors'] = $errors;
        $_SESSION['post'] = $post;
        header('Location: posts_create.php');
        exit;
    }