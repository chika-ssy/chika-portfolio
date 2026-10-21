<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからのデータを取得
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // 送信先のメールアドレス
    $to = "sen.chika12321+portfolio@gmail.com";
    // メールの件名
    $subject = "ポートフォリオサイトからのメッセージ";

    // メールの本文
    $body = "名前: $name\n";
    $body .= "メール: $email\n";
    $body .= "メッセージ:\n$message";

    // メールヘッダー
    $headers = "From: $email";

    // メールを送信
    if (mail($to, $subject, $body, $headers)) {
        echo "メッセージが送信されました。";
    } else {
        echo "メッセージの送信に失敗しました。";
    }
} else {
    echo "無効なリクエストです。";
}
?>
