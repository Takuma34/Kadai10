<?php

session_start();
require_once('model.php');
loginCheck();

// 1.GETで id値を取得
$id = $_GET["id"];


// // 2.DB接続など
try {
    // Password:MAMP='root',XAMPP=''
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError'.$e->getMessage());
}

// // 3．データ取得SQL作成
$sql = "SELECT * FROM gs_new_table WHERE id=:id"; 
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// // 4．データ表示
$view = "";
if ($status === false) {
    // execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    // データのみ抽出の場合はwhileループで取り出さない
    $row = $stmt->fetch();
}

require_once('templates/detail.php');

$form = new RepairForm();
if (isset($_POST['toggleBtn'])) {
    $form->toggleFormVisibility();
}

$buttonHandler = new ButtonHandler();
$buttonHandler->handleButtonClick();
$buttonHandler->displayButton();
$form->displayForm();


