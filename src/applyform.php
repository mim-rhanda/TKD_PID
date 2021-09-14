<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/applyform.js"></script>
</head>
<body>
    <div id="header"></div>
    <div id="container"> 
        <div class="main_wrapper">
            <h1>研究参加申込フォーム</h1>
            <div class="form_wrap">
                <p class="warning-text"><span>「※」は必須項目です。</span></p>
                <form class="form-horizontal" action="saveinfos.php" method="post">  
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="age_group">あなたの年齢を教えてください:</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="age_group">
                                <option value="">--Please choose an option--</option>
                                <?php for ($i = 12; $i <= 100; $i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?>歳です</option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>

                    <h3>メールアドレス</h3>
                    <p>メールアドレスをお持ちでない未成年の方は保護者様のメールアドレスを入力してください。</p>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="email">Email:<span class="cmn-warning-text">※</span></label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-5" for="confirm-email">Confirm Email:<span class="cmn-warning-text">※</span></label>
                        <div class="col-sm-7">          
                            <input type="email" class="form-control" id="confirm_email" placeholder="Enter confirm email" name="confirm_email">
                        </div>
                    </div>
        
                    <h3>謝礼送付先</h3>
                    <p>未成年の方は謝礼送付用に保護者様のメールアドレスを入力してください。上で入力したメールアドレスと同一の場合はチェックを入れてください。</p>
                    <div class="form-group">
                        <div class="col-sm-2"></div>
                        <label class="control-label col-sm-9">謝礼用メールアドレスは上記メールアドレスと同一です</label>
                        <div class="col-sm-1">          
                            <input type="checkbox" class="form-control" id="mailcheck" name="consent_for_join" value="1">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-sm-5" for="email">Email:<span class="cmn-warning-text">※</span></label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-5" for="confirm-email">Confirm Email:<span class="cmn-warning-text">※</span></label>
                        <div class="col-sm-7">          
                            <input type="email" class="form-control" id="confirm-email2" placeholder="Enter confirm email" name="confirm-email2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-5" for="code">承認コード :<span class="cmn-warning-text">※</span></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="code" placeholder="Enter code" name="medical_institution_code">
                            <span class="code_text">※ 研究案内ﾘｰﾌﾚｯﾄに記載されたｺｰﾄﾞを入力してください</span>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-5">
                           <a href="https://3h-ct.co.jp/" target="_blank">個人情報保護規約</a> 
                        </div>
                        <div class="col-sm-3"> </div>   
                    </div>

                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <label class="control-label">個人情報保護規約を読み同意します</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="checkbox" class="form-control" id="agreecheck" name="agreecheck">
                        </div>   
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        
                        
                        <div class="col-sm-10">
                        <div class="human_check">
                            <div class="col-sm-1 text">
                                <input type="checkbox" class="form-control" id="humancheck" name="humancheck">
                            </div>
                            <div class="col-sm-8 text">
                                <label class="control-label">私はロボットではありません</label>
                            </div>
                            <div class="col-sm-3 reptcha_img">
                                <img src="img/recaptcha.png" alt="recaptcha" width="70px">
                            </div>
                            <p class="recaptcha_text">reCAPTCHA<br>プライバシーポリシー・利用規約</p>
                        </div>

                        </div>
                        <div class="col-sm-1"></div>
                        
                    </div>

                    <div class="form-group">   
                        <div class="col-sm-2"></div>     
                        <div class="col-sm-8">
                            <button id="btn_continue" class="btn btn-primary btn-lg" disabled>入力へ進む</button>
                        </div>
                        <div class="col-sm-2"></div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="footer"></div>
</body>
</html>