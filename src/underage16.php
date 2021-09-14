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
    <div id="header"></div>
    <div id="container"> 
        <div class="main_wrapper">
            <h1>研究参加申込フォーム</h1>
            <h2>16歳未満の方と保護者様へ</h2>
            <h3>16歳未満の研究参加ご本人様と保護者様で一緒に以下の<br>説明文書をお読みいただき、・・・・・・・・・・・・・</h3>
            <div class="agreement_textbox">
                <h3 class="agreement_title">同意説明文書</h3>
                <p class="agreement_text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                </p>
                <p class="pdf_download"><a href="pdf/samplepdf.pdf" download="sample.pdf">PDFダウンロード</a></p>
            </div>

            <div class="check_wrapper">
                <input type="checkbox" id="agreecheck1" name="agreecheck01" attr="">
                <label for="01-B" class="checkbox01">＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊</label>
                <br>
                <input type="checkbox" id="agreecheck2" name="agreecheck02">
                <label for="01-C" class="checkbox01">＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊</label>
            </div>

            <div class="ascent_textbox">
                <h3 class="ascent_title">アセント文書</h3>
                <p class="ascent_text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                </p>
                <p class="pdf_download"><a href="pdf/samplepdf.pdf" download="sample.pdf">PDFダウンロード</a></p>
            </div>

            <div class="check_wrapper">
                <input type="checkbox" id="agreecheck3" name="ascentcheck01">
                <label for="01-B" class="checkbox01">＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊</label>
                <br>
                <input type="checkbox" id="agreecheck4" name="ascencheck02">
                <label for="01-C" class="checkbox01">＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊</label>
            </div>

            <div class="btn_wrapper">
                <button id="btn_continue" onclick="location.href='applyform.php'" class="btn btn-primary btn-lg" disabled="true" >入力へ進む</button>
            </div>
        </div>
    </div>
    <div id="footer"></div>
</body>
</html>