<?php

$name = $_POST['name'];
$url = $_POST['url'];
$comment = $_POST['comment'];

try {
    //ID MAMP ='root'
    //Password:MAMP='root',XAMPP=''
    $pdo = new PDO('mysql:dbname=gs_php02;charset=utf8;host=localhost','root','root');
  } catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
  }

  $stmt = $pdo->prepare("INSERT INTO gs_bm_table( id , name, url, comment, indate )VALUES(NULL,:name,:url,:comment,sysdate()) ");
  $stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $status = $stmt->execute();

  if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("ErrorMessage:".$error[2]);
  }else{
    //５．index.phpへリダイレクト
    header('Location: index.php');
  }

?>