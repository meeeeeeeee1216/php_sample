<?php

    $conn = new mysqli('localhost', 'root', 'pass1234',"php_sample_db");

     // 接続エラーの確認
    if ($conn->connect_error) {
        echo $conn->connect_error;
        exit();
    } else {
        $conn->set_charset("utf8");
    }

    // ここにDB処理いろいろ書く（後述）
    // sql to create table
    $sql = "select * from account";

    
    
    if ($result = $conn->query($sql)) {
         // 連想配列を取得
        while ($row = $result->fetch_assoc()) {
            echo $row["name"] . $row["email"] . "<br>";
        }
    } else {
        echo "Error sellect: " . $conn->error;
    }
    
    // DB接続を閉じる
    $conn->close();
?> 

