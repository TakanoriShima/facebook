<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>新規投稿</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php include_once 'views/_navbar_view.php'; ?>
        <div class="container">
            <div class="row mt-3">
                <h1 class="col-sm-12 text-center text-primary pb-1">新規投稿</h1>
            </div>
            <?php include_once 'views/_errors_view.php'; ?>
            <div class="row mt-3">
                <form class="col-sm-12" action="posts_store.php" method="POST" enctype="multipart/form-data">
                    <!-- 1行 -->
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">タイトル</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="title" value="<?= $post->title ?>">
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">内容</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="content" value="<?= $post->content ?>">
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">画像</label>
                        <div class="col-10">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    
                    
                    
                    <!-- 1行 -->
                    <div class="mb-3 row mt-3">
                        <div class="offset-2 col-10 row">
                            <button type="submit" class="col-sm-12 btn btn-primary">新規投稿</button>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="<?= $token ?>">
                </form>
                
            </div>

        </div>
            
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>