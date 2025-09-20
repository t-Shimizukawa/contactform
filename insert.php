<?php

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01; host=localhost;","root","");

    $sql = "INSERT INTO contactform(name, mail, age, coments) VALUES(?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(1,$_POST['name']);
    $stmt->bindValue(2,$_POST['mail']);
    $stmt->bindValue(3,$_POST['age']);
    $stmt->bindValue(4,$_POST['coments']);

    $stmt->execute();

    ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>問い合わせフォーム</title>
        <link rel="stylesheet" href="style2.css">
    </head>

    <body>
        <h1>お問合わせフォーム</h1>
        <div class="confirm">
            <p>
                お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
            </p>
    </body>
</html>