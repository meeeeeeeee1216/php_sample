<?php
    $form = $_POST;

    $mysqli = new mysqli('localhost', 'root', 'pass1234',"php_sample_db");

     // 接続エラーの確認
    if ($mysqli->connect_error) {
        echo $mysqli->connect_error;
        exit();
    } else {
        $mysqli->set_charset("utf8");
    }

    $sql = "INSERT INTO account (name,email) values (?, ?)";
    if( $stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("ss", $form['name'], $form['email']);
        $stmt->execute();
        $stmt->close();
    }

    // DB接続を閉じる
    $mysqli->close();
    
?> 

