<?php

require_once('funcs.php');

$name = $_POST['name'];
$url = $_POST['url'];
$comment = $_POST['comment'];
$id = $_POST["id"];

$pdo = db_conn();

  $stmt = $pdo->prepare("UPDATE gs_bm_table SET name=:name, url=:url, comment=:comment, indate=sysdate() WHERE id=:id");
  $stmt->bindValue(':name', h($name), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':url', h($url), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':comment', h($comment), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':id', h($id), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
  $status = $stmt->execute();

  if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    sql_error($stmt);
  }else{
    //５．index.phpへリダイレクト
    redirect('bm_list_view.php');
  }

?>