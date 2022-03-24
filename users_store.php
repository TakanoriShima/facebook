<?php
    // (C)
    // var_dump($_POST);
    // var_dump($_FILES);
    require_once 'filters/csrf_filter.php';
    require_once 'models/User.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_FILES['image']['name'];
    
    $user = new User($name, $email, $password, $image);
    // var_dump($user);
    
    $errors = $user->validate();
    // var_dump($errors);
    if(count($errors) === 0){
        if($user->upload()){
            $flush = $user->save();
            if($flush === ''){
                $_SESSION['errors'] = array('そのメールアドレスを持ったユーザーは既に存在します');
                $user->email = '';
                $_SESSION['user'] = $user;
                header('Location: signup.php');
                exit;
            }else{
                $_SESSION['flush'] = $flush;
                header('Location: index.php');
                exit;
            }
        }
    }else{
        $_SESSION['errors'] = $errors;
        $_SESSION['user'] = $user;
        header('Location: signup.php');
        exit;
    }