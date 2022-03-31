<?php
    require_once 'filters/csrf_filter.php';
    require_once 'models/User.php';
    // var_dump($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    // 入力された値を持ったユーザーがいるかDBを探す
    $user = User::login($email, $password);
    // var_dump($user);
    // そんなユーザーがDBにいれば
    if($user !== false){
        // ログイン処理
        // DBから見つけたユーザーをセッションに保存
        $_SESSION['login_user'] = $user;
        header('Location: top.php');
        exit;
    }else{
        // ログイン画面に戻る
        $_SESSION['errors'] = array('ログインに失敗しました');
        // リダイレクト (C) => (C)
        header('Location: login.php');
        exit;
    }