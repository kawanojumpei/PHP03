<?php

require_once('funcs.php');

$id = $_GET["id"];

$pdo = db_conn();

  $stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");
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