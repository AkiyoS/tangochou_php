<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>入力-単語帳アプリ</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrap">
      <section class="header inp">
          <div class="menu">
            <button id="menuIcon"><img src="./img/menu.png" alt="" width="40"></button>
            <button id="closeIcon" class="tg"><img src="./img/close.png" alt="" width="40"></button>
          </div>
          <div class="menuOpen" style="display:none">
            <a href="index.php" class="index">学習する</a>
            <a href="select.php" class="select">全カード</a>
            <a href="chill.php" target="_blank" class="chill">休憩する</a>
          </div>
          <div class="title">
            <h1>単語の登録</h1>
          </div>
        </section>
        <form action="insert.php" method="post">
          <div class="inputBook">
            <input type="text" name="omote" id="omote" placeholder="おもて">
            <input type="text" name="ura" id="ura" placeholder="裏">
          </div>
          <input type="submit" value="登録する" class="submit">
        </form>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="./script.js"></script>
  </body>
</html>
