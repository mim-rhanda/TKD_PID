<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\ApplicationLogTable;
use Libs\Database\MedicalInstitutionMasterTable;
$table = new MedicalInstitutionMasterTable(new MySQL());
$codes = $table->getCodes();
$medical_institution_id= $table->getId($_POST['medical_institution_code'])->id;
$medical_institution_name= $table->getMedicalName($medical_institution_id)->name;

$data = [
    "parent_email" => $_POST['parent_email'] ?? 'Unknown',
	"email" => $_POST['email'] ?? $_POST['parent_email'],
	"medical_institution_code" => $_POST['medical_institution_code'] ?? 'Unknown',
	"age" => $_POST['age'] ?: '0',  
    "medical_institution_id" => $medical_institution_id ?? 'Unknown',
    "medical_institution_name" => $medical_institution_name ?? 'Unknown'
	// "consent_for_join" => $_POST['consent_for_join'] ?? 'Unknown',
	// "ascent_for_join" => $_POST['ascent_for_join'] ?? 'Unknown',
];

$table = new ApplicationLogTable(new MySQL());
if ($table) {
    $lastInsertId = $table->insert($data);
    $insertData = $table->select($lastInsertId);

    if ($data !== $insertData) {
        echo '<meta http-equiv="refresh" content="5;URL=applyform.php">
        <p>エラーが発生しました。<br/>5秒後に研究参加申込フォームへ戻ります。</p>';
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <script src="../asset/js/jquery.min.js"></script>
    <script src="../asset/js/custom.js"></script>
</head>
<body>
    <div class="container">
        <div class="main_wrapper1">
            <div class="content_wrapper">
                <h1>研究参加申込フォーム</h1>
                <h2>研究参加を受け付けました</h2>
                <h3>お申込みありがとうございました。<br>あらためて登録メールアドレス宛に担当者よりご連絡致しますのでお待ちください。<br>登録の手続き上、多少お時間をいただく場合がございます。
</h3>
                <div class="row">
                <div class="btn_wrapper">
                  <button id="btn_close">閉じる</button>
                </div>
          </div>
    </div> 
</body>
</html>