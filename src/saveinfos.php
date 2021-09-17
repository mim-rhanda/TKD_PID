<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\ApplicationLogTable;
use Libs\Database\MedicalInstitutionMasterTable;
$table = new MedicalInstitutionMasterTable(new MySQL());
$codes = $table->getCodes();

$data = [
	"email" => $_POST['email'] ?? 'Unknown',
	"medical_institution_code" => $_POST['medical_institution_code'] ?? 'Unknown',
    "parent_email" => $_POST['parent_email'] ?? 'Unknown',
	"age" => $_POST['age'] ?? 'Unknown',
	// "consent_for_join" => $_POST['consent_for_join'] ?? 'Unknown',
	// "ascent_for_join" => $_POST['ascent_for_join'] ?? 'Unknown',
];

print_r($_POST);

    $table = new ApplicationLogTable(new MySQL());
    if ($table) {
	    $table->insert($data);
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <div class="container">
        <div class="main_wrapper1">
            <div class="content_wrapper">
                <h1>研究参加申込フォーム</h1>
                <h2>研究参加を受け付けました</h2>
                <h3>お申込みありがとうございました。<br>あらためて登録メールアドレス宛に担当者よりご連絡致しますので<br>お待ちください・・・・・・・・・・・・・・・・・・・・・</h3>
                <div class="row">
                <div class="btn_wrapper">
                  <button id="btn_close">閉じる</button>
                </div>
          </div>
    </div> 
</body>
</html>