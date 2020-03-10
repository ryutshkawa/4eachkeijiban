<!DOCTYPE html>
<html lang="ja"> 

<head>
    <meta charset="UTF-8"> <title>4eachblog 掲示板</title> <link rel="stylesheet" type="text/css" href="style.css">
</head> 

<body>
    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
    $stmt = $pdo->query("select*from 4each_keijiban");
    ?>
    
    <img src="4eachblog_logo.jpg"  >
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <div class="main-container">
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>
                <div class=‘kiji’>
                    <h3>タイトル</h3>
                    <div class=‘contents’>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                        <div class=‘handlename’>posted by 通りすがり</div>
                    </div>
                </div>
                <?php
                while($row = $stmt->fetch()){
                    echo "<div class='kiji'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="right">
                <div class="box1">
                    <h1>人気の記事</h1>
                    <p>PHP オススメの本</p>
                    <p>PHP MyAdmin の使い方</p>
                    <p>今人気のエディタ Top5</p>
                    <p>HTMLの基礎</p>
                </div>
                <div class="box2">
                    <h1>オススメのリンク</h1>
                    <p>インターノウス株式会社</p>
                    <p>XAMPPのダウンロード</p>
                    <p>Eclipseのダウンロード</p>
                    <p>Bracketsのダウンロード</p>
                </div>
                <div class="box3">
                    <h1>カテゴリ</h1>
                    <p>HTML</p>
                    <p>PHP</p>
                    <p>MySQL</p>
                    <p>JavaScript</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <span>copyright ⓒ internous | 4each blog is the one which provides A to Z about programming.</span>
    </footer>
</body>
</html>