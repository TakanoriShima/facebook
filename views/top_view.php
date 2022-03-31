<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- ViewPort Setting -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Original CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico">
        <title>トップページ</title>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Original JavaScript -->
        <script src="js/script.js"></script>
    </head>
    <body>
        <div class="container p-2">
            <div class="row">
                <h1 class="col-sm-12 text-center text-primary">トップページ</h1>
            </div>
            <div class="row mt-1">
                <a class="offset-sm-3 col-sm-6 btn btn-danger" href="logout.php">ログアウト</a>
            </div>
            <?php include_once 'views/_flush_view.php'; ?>
            <div class="row mt-2">
                <div class="col-sm-3">
                    <img src="uploads/users/<?= $login_user->image ?>" class="icon">
                </div>
                <div class="col-sm-5"><?= $login_user->name ?>さん、ようこそ！</div>
            </div>
        </div>
    </body>
</html>