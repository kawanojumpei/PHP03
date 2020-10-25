<?php

require_once('funcs2.php');

$name = $_POST['name'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = $_POST['kanri_flg'];
$life_flg = $_POST["life_flg"];
$id =  $_POST["id"];

$pdo = db_conn();

  $stmt = $pdo->prepare("UPDATE gs_user_table SET name=:name, lid=:lid, lpw=:lpw, kanri_flg=:kanri_flg, life_flg=:life_flg WHERE id=:id");
  $stmt->bindValue(':name', h($name), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':lid', h($lid), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':lpw', h($lpw), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':kanri_flg', h($kanri_flg), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':life_flg', h($life_flg), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':id', h($id), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
  $status = $stmt->execute();

  if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    sql_error($stmt);
  }else{
    //５．index.phpへリダイレクト
    redirect('select2.php');
  }

?>