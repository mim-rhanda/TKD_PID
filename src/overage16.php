<!DOCTYPE html>
<html>
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
        <div class="main_wrapper">
            <div class="content_wrapper">
                <h1>研究参加申込フォーム</h1>
                <h2>同意説明文書</h2>
                <h3>以下をお読みいただき、内容をご理解の上研究にご参加ください。<br>また、16歳未満の方は保護者様と一緒にをお読みいただき、<br>・・・・・・・・・・・・・・・・・・・・・・・・・・・</h3>
                <div class="row">
                    <div class="agreement_textbox">
                        <h3 class="agreement_title">同意説明文書</h3>
                        <p class="agreement_text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        </p>
                         <p class="pdf_download"><a href="pdf/samplepdf.pdf" download="sample.pdf">PDFダウンロード</a></p>
                    </div>
                </div>

                <div class="row">
                    <div class="check_wrapper">
                        <input type="checkbox" id="agreecheck1" name="agreecheck01" attr="">
                        <label for="01-B" class="checkbox01">＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊</label>
                        <br>
                        <input type="checkbox" id="agreecheck2" name="agreecheck02">
                        <label for="01-C" class="checkbox01">＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊</label>
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
