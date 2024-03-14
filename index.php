<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git・PHO・SQL テスト課題</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="profile-section">
        <h1>プロフィール</h1>
        <div class="profile-info">
            <img src="images/profile.png" alt="Profile Picture">
            <h3>篠田みはる</h3>
            <p>1995年4月6日生まれ。今年で三十路間近になるので震えている。
                <br>最近はドラクエに大ハマり。現在ドラクエ7プレイ中。
                <br>ドラクエ9をクリアしたらドラクエ全シリーズプレイ達成になるので楽しみにしている。
            </p>
        </div>
    </div>

    <div class="contact-form-section">
        <h2>お問い合わせフォーム</h2>
        <form action="process_form.php" method="POST" onsubmit="return validateForm()">
            <label for="name">名前:</label><input type="text" id="name" name="name"><br><br>
            <label for="email">メールアドレス:</label><input type="email" id="email" name="email"><br><br>
            <label for="message">メッセージ:</label><textarea id="message" name="message"></textarea><br><br>
            <input type="submit" value="送信">
        </form>
    </div>

    <div class="messages-section">
        <h2>メッセージ</h2>
        <?php
        // DB接続
        $conn = mysqli_connect("localhost", "root", "", "git-test");

        // 接続確認
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // メッセージを取得して表示
        $sql = "SELECT * FROM comments";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p><strong>" . $row['name'] . "</strong>: " . $row['message'] . "</p>";
            }
        } else {
            echo "メッセージはまだありません";
        }

        // DB接続を閉じる
        mysqli_close($conn);
        ?>
    </div>

    <script src="js/validateForm.js"></script>

</body>

</html>