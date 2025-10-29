<?php

  function aisatsu(): string {
    date_default_timezone_set('Asia/Tokyo');
    $now = date("Y/m/d H:i:s:");
    $now_hour = (int)date("H");
    if ($now_hour >= 6 && $now_hour < 12) {
      $greet = 'おはようございます';
    } elseif ($now_hour >= 12 && $now_hour < 18) {
      $greet = 'こんにちは';
    } else {
      $greet = 'こんばんは';
    }
    return $greet;
  }

  $aisatsu = aisatsu()
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p><?php print $aisatsu; ?></p>
    </body>
</html>
