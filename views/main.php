<?php include("head.tpl.php"); ?>

<body>
    <h1>PHPサンプルページ</h1>

    <?php
        // 名前がおかしい
        if($_GET["name"] == "true"){
            echo "名前は30文字以内で入力してください";
        }
        if($_GET["email"] == "true"){
            echo "メールは50文字以内で入力してください"
        }
    ?>


    <form action="check.php" method="get">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">メールアドレス:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="送信">
    </form>
</body>
</html>