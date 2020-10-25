<?php

function h($str){
    return htmlspecialchars($str,ENT_QUOTES);
}

function db_conn(){
    try {
        $pdo = new PDO('mysql:dbname=gs_php02;charset=utf8;host=localhost','root','root');
        return $pdo;
      } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
      }
}

function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("ErrorMessage:".$error[2]);
}

function redirect($file_name){
    header('Location:' . $file_name);
}

?>