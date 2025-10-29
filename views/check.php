<?php include("head.tpl.php"); ?>
<?php include("../process.php"); ?>
<body>
    <h1>入力内容確認</h1>
    <p>名前: <?php echo htmlspecialchars($form['name'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p>メールアドレス: <?php echo htmlspecialchars($form['email'], ENT_QUOTES, 'UTF-8'); ?></p>
    <form action="end.php" method="post">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($form['name'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($form['email'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="submit" value="確定">
    </form>
</body>
