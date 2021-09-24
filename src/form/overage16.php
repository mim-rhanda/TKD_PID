<!DOCTYPE html>
<html>
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
        <div class="main_wrapper">
            <div class="content_wrapper">
                <h1>研究参加申込フォーム</h1>
                <h2>同意説明文書</h2>
                <h3>同意説明文書をお読みいただき、同意いただける場合は、下記の該当する項目にチェックしてください。</h3>
                <div class="row">
                    <div class="agreement_textbox">
                        <h3 class="agreement_title">同意説明文書</h3>
                        <p class="agreement_text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        </p>
                         <p class="pdf_download"><a href="../asset/pdf/0921_agreement_doc.pdf" download="sample.pdf">PDFダウンロード</a></p>
                    </div>
                </div>

                <div class="row">
                    <div class="check_wrapper">
                        <label for="01-B" class="checkbox01">同意説明文書内の登録基準に当てはまっています</label>
                        <input type="checkbox" id="agreecheck1" name="agreecheck01" attr="">
                        <br>
                        <label for="01-C" class="checkbox01">同意説明文書内の除外基準に当てはまっていません</label>
                        <input type="checkbox" id="agreecheck2" name="agreecheck02">
                        <br>
                        <label for="01-C" class="checkbox01">研究参加に同意します</label>
                        <input type="checkbox" id="agreecheck3" name="agreecheck03">
                    </div>
                </div>

                <div class="row">
                    <div class="btn_wrapper">
                        <button id="btn_continue" onclick="location.href='applyform.php'" class="btn btn-primary btn-lg" disabled="true" >入力へ進む</button>
                    </div>
                </div>

            </div>
        </div>
</body>
</html>
