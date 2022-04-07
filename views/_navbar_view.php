<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <!-- ホームへ戻るリンク。ブランドロゴなどを置く。 -->
    <a href="top.php" class="navbar-brand text-success"><img src="uploads/users/<?= $login_user->image ?>" alt="<?= $login_user->image ?>" width="50" class="mr-2"><?= $login_user->name ?> @Facebook</a>

    <!-- 横幅が狭いときに出るハンバーガーボタン -->
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- メニュー項目 -->
    <div class="collapse navbar-collapse" id="nav-bar">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="posts_create.php" class="nav-link">新規投稿</a></li>
            <li class="nav-item"><a href="users_show.php" class="nav-link">MyPage</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">ログアウト</a></li>
        </ul>
    </div>
</nav>