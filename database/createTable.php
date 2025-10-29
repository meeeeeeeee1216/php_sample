<?php

    // https://qiita.com/yasumodev/items/bd2ba476f31804d527d3

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
    $sql = "CREATE TABLE account (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name varchar(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table account created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    // sql to insert data
    $sql = "INSERT INTO account (
    name, email) VALUES (
    'sample name' , 'sample@sample.com')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table account insert successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // DB接続を閉じる
    $conn->close();
?> 

