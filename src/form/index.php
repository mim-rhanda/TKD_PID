<?php
$page_title = 'Document';
?>
<!DOCTYPE html>
<html lang="ja">

<?php include 'inc/head.php'; ?>

<body>

<?php include 'inc/header.php'; ?>

<div class="container">
    <div class="main_wrapper1">
        <div class="content_wrapper">
          <h1>研究参加申込フォーム</h1>
          <h2>あなたの年齢を教えてください</h2>
          <div class="row">
              <div class="btn_wrapper">
                  <button onclick="location.href='noParticipate.php'">0歳～11歳</button>
                  <button onclick="location.href='underage16.php'">12歳～15歳</button>
                  <button onclick="location.href='overage16.php'">16歳以上</button>
              </div>
          </div>
        </div>
      </div>
</div>
  
<?php include 'inc/footer.php'; ?>

</body>
</html>
