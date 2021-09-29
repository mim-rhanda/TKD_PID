<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\ApplicationLogTable;
use Libs\Database\MedicalInstitutionMasterTable;
$table = new MedicalInstitutionMasterTable(new MySQL());
$codes = $table->getCodes();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/../asset/css/bootstrap.min.css"> -->
    <script src="../asset/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="../asset/js/applyform.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        let codes = [];
        <?php 
        foreach ($codes as $code){?>
        codes.push('<?php echo $code->code;?>');
        <?php } ?>
        console.log(codes);
   </script>     
</head>
<body>
    <div class="container">
        <div class="main_wrapper">
            <div class="content_wrapper">
                <h1>研究参加申込フォーム</h1>

                <form class= "apply_form_pc" id="apply_form" action="mail.php" method="post">
                  <p class="warning-text"><span>「※」は必須項目です。</span></p>
                    <div class="row">
                      <div class="col-35">
                        <label for="age">あなたの年齢を教えてください:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                          <select class="form-control" name="age">
                            <option value="">--Please choose an option--</option>
                            <?php for ($i = 0; $i <= 100; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?>歳です</option>
                            <?php } ?>
                          </select>
                      </div>
                    </div>

                    <div class="row">
                      <h3>メールアドレス</h3>
                      <p>メールアドレスをお持ちでない未成年の方は保護者様のメールアドレスを入力してください。<br>ただし、メールアドレスをお持ちでない20歳未満の方は保護者もしくは保護者に該当する方のメールアドレスを入力してください。</p>
                      <div class="col-35">
                        <label for="parent_email">Email:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="parent_email" name="parent_email" placeholder="Enter Email Address..">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-35">
                        <label for="confirm_parent_email">Confirm Email:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="confirm_parent_email" name="confirm_parent_email" placeholder="Enter Confirm..">
                      </div>
                    </div>

                    <div class="row">
                    <h3>謝礼送付先</h3>
                    <p>本研究の対象となる20歳未満の方への謝礼は保護者もしくは保護者に該当する方へ送付致しますので、保護者もしくは保護者に該当する方のメールアドレスを入力してください。<br>
                    上記に入力したメールアドレスと同一の場合はチェックを入れてください。</p>
                      <div class="col-95">
                        <label for="mailcheck">謝礼用メールアドレスは上記メールアドレスと同一です</label>
                      </div>
                      <div class="col-5">
                        <input type="checkbox" id="mailcheck" name="mailcheck" value="1">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-35">
                        <label for="email">Email:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="email" name="email" placeholder="Enter Email..">
                      </div>
                    </div>
    
                    <div class="row">
                      <div class="col-35">
                        <label for="confirm_email">Confirm Email:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="confirm_email" name="confirm_email" placeholder="Enter Confrim Email..">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-35">
                        <label for="medical_institution_code">承認コード:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" class="form-control" id="medical_institution_code" placeholder="Enter code" name="medical_institution_code"><br>
                        <span class="code_text">※ 研究案内ﾘｰﾌﾚｯﾄに記載されたｺｰﾄﾞを入力してください</span>
                      </div>
                    </div><br>

                    <div class="row">
                      <div class="col-35"></div>
                      <div class="col-75">
                        <a href="https://3h-ct.co.jp/" target="_blank">個人情報保護規約</a> 
                      </div>
                    </div><br>

                    <div class="row">
                      <div class="col-85-check">
                        <label for="agreecheck">個人情報保護規約を読み同意します</label>
                      </div>
                      <div class="col-15-check1"> 
                        <input type="checkbox" id="agreecheck" name="agreecheck" value="1">
                      </div>
                    </div>

                    <div class="row">
                      <div class="g-recaptcha" data-sitekey="6Ldv2bcUAAAAAFeYuQAQWH7I_BVv2_2_vvmn2Fpp"></div>
                    </div>

                    <div class="row">
                      <button id="btn_continue" class="btn_adjust" disabled="true" >入力へ進む</button>
                    </div>
                </form>

                <form class= "apply_form_phone" id="apply_form1" action="saveinfos.php" method="post">
                  <p class="warning-text"><span>「※」は必須項目です。</span></p>
                    <div class="row">
                      <div class="col-35">
                        <label for="age">あなたの年齢を教えてください:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                          <select class="form-control" name="age">
                            <option value="">--Please choose an option--</option>
                            <?php for ($i = 0; $i <= 100; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?>歳です</option>
                            <?php } ?>
                          </select>
                      </div>
                    </div>

                    <div class="row">
                      <h3>メールアドレス</h3>
                      <p>メールアドレスをお持ちでない未成年の方は保護者様のメールアドレスを入力してください。</p>
                      <div class="col-35">
                        <label for="parent_email">Email:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="parent_email" name="parent_email" placeholder="Enter Email Address..">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-35">
                        <label for="confirm_parent_email">Confirm Email:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="confirm_parent_email" name="confirm_parent_email" placeholder="Enter Confirm..">
                      </div>
                    </div>

                    <div class="row">
                    <h3>謝礼送付先</h3>
                    <p>未成年の方は謝礼送付用に保護者様のメールアドレスを入力してください。上で入力したメールアドレスと同一の場合はチェックを入れてください。</p>
                      <div class="col-95">
                        <label for="mailcheck">謝礼用メールアドレスは上記メールアドレスと同一です</label>
                      </div>
                      <div class="col-5">
                        <input type="checkbox" id="mailcheck1" name="mailcheck" value="1">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-35">
                        <label for="email">Email:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="email1" name="email" placeholder="Enter Email..">
                      </div>
                    </div>
    
                    <div class="row">
                      <div class="col-35">
                        <label for="confirm_email">Confirm Email:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="confirm_email1" name="confirm_email" placeholder="Enter Confrim Email..">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-35">
                        <label for="medical_institution_code">承認コード:<span class="cmn-warning-text">※</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" class="form-control" id="medical_institution_code" placeholder="Enter code" name="medical_institution_code">
                        <span class="code_text">※ 研究案内ﾘｰﾌﾚｯﾄに記載されたｺｰﾄﾞを入力してください</span>
                      </div>
                    </div><br>

                    <div class="row">
                      <div class="col-35"></div>
                      <div class="col-75">
                        <a href="https://3h-ct.co.jp/" target="_blank">個人情報保護規約</a> 
                      </div>
                    </div><br>

                    <div class="row">
                      <div class="col-85-check">
                        <label for="agreecheck1">個人情報保護規約を読み同意します</label>
                      </div>
                      <div class="col-15-check1"> 
                        <input type="checkbox" id="agreecheck1" name="agreecheck1" value="1">
                      </div>
                    </div>
                    
                    <div class="row">
                    <div class="g-recaptcha" data-sitekey="6Ldv2bcUAAAAAFeYuQAQWH7I_BVv2_2_vvmn2Fpp"></div>
                    </div>

                    <!-- <div class="row">
                      <div class="human_check">
                        <div class="col-15 text">
                          <input type="checkbox" class="form-control" id="humancheck" name="humancheck">
                        </div>
                        <div class="col-55">
                          <label >私はロボットではありません</label>
                        </div>
                        <div class="col-40" reptcha_img>
                          <img src="../asset/img/recaptcha.png" alt="recaptcha" width="70px">
                        </div>
                        <p class="recaptcha_text">reCAPTCHA<br>プライバシーポリシー・利用規約</p>
                      </div>
                    </div> -->

                    <div class="row">
                      <button id="btn_continue1" disabled="true">入力へ進む</button>
                    </div>
                </form>
            </div>
          </div> 
    </div>
</body>
</html>