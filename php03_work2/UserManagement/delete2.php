<?php
require_once('funcs2.php');  // 他の場所から持ってくるデータは一番上に表示がルール
$id = $_GET['id'];
$pdo=db_conn();
$stmt = $pdo->prepare('DELETE FROM gs_user_table WHERE id=:id');
// $stmt->bindValue(':name', h($name), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':email', h($email), PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':age', h($age), PDO::PARAM_INT);        //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':naiyou', h($naiyou), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', h($id), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
    //*** function化する！*****************
    sql_error($stmt);
    // $error = $stmt->errorInfo();
    // exit("SQLError:".$error[2]);
}else{
    //*** function化する！*****************
    redirect('select2.php');
    // header("Location: index.php");
    // exit();
}

?>