<?php
// POSTされたデータを取得
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// DB接続
$conn = mysqli_connect("localhost", "root", "", "git-test");

// 接続確認
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// データを挿入
$sql = "INSERT INTO comments (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo '<script>alert("メッセージが送信されました");</script>';
    echo '<script>window.location.href = "index.php";</script>';
    exit;
} else {
    echo "エラー: " . $sql . "<br>" . mysqli_error($conn);
}

// DB接続を閉じる
mysqli_close($conn);
