<?php

$id = $_GET['id'];

require_once("funcs.php");
$pdo = db_conn();

// データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=" . $id);
$status = $stmt->execute();

//データ表示
$view="";
if ($status==false) {
    sql_error($status);
}else{
  $result = $stmt->fetch();}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
    
</div>
<!-- Main[End] -->

<form method="POST" action="update.php">
<div class="jumbotron">
   <fieldset>
    <legend>フォームの記入</legend>
     <label>書籍名：<input type="text" name="name" value=<?= $result['name']?>></label><br>
     <label>書籍URL：<input type="text" name="url" value=<?= $result['url'] ?>></label><br>
     <label><textArea name="comment" rows="4" cols="40"><?= $result['comment'] ?></textArea></label><br>
     <input type="hidden" name="id" value=<?= $result['id'] ?>>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>

</body>
</html>
