<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");

?>


<!doctype HTML>
    <html lang="ja">
    
        <head>
            <meta charset="UTF-8">
            <title>4eachblog 掲示板</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
    
        <body>
            <div class="logo">
                <img src="4eachblog_logo.jpg">
            </div>
    
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
                <div class="left">
                    <h2>プログラミングに役立つ掲示板</h2>
                                    
                    <form method="post" action="insert.php">
                        <h3>入力フォーム</h3>
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" name="handlename">
                        </div>
                
                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" name="title">
                        </div>
                
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="60" rows=7 name="comments"></textarea>
                        </div>
                        <br>
                        
                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>
                    </form>
                </div>
                
                <div class="right">
            
                    <h3>人気の記事</h3>
            
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                    
                    <h3>オススメリンク</h3>
                        
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                    
                    <h3>カテゴリ</h3>
                        
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </main>
        <footer>
            copyright @ internous | 4each blog the which provides A to Z about programming.
        </footer>
    </body>
</html>
            
            
            
            
            
            
    
    




