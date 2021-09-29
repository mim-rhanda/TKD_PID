<?php
  $site_name = '原発性免疫不全症候群患者様を対象とした健康関連の生活の質に対する調査研究';
  $page_title = isset($page_title) ? $page_title.'｜'.$site_name : $site_name;
  $page_css = isset($page_css) ? $page_css : '';
  $page_js = isset($page_js) ? $page_js : '';
?>
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <!-- Favicon, Thumbnail -->
  <link rel="shortcut icon" href="./asset/img/common/favicons/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="./asset/img/common/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="./asset/img/common/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./asset/img/common/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./asset/img/common/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./asset/img/common/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./asset/img/common/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./asset/img/common/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./asset/img/common/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./asset/img/common/favicons/apple-touch-icon-180x180.png">

  <title><?=$page_title?></title>
  <!-- ogp -->
  <meta property="og:site_name" content="<?=$site_name?>" />
  <meta property="og:url" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="" />
  <meta property="og:locale" content="ja_JP" />
  <!-- <meta property="fb:app_id" content="AppID"> -->
  <meta name="twitter:card" content="summary_large_image" />
  <!-- <meta name="twitter:site" content="" /> -->
  <meta name="twitter:description" content="" />
  <meta name="twitter:image:src" content="" />
  <!-- css -->
  <link rel="stylesheet" href="/asset/css/reset.css">
  <link rel="stylesheet" href="/asset/css/common.css">
  <link rel="stylesheet" href="/asset/css/home.css">

  <link rel="stylesheet" href="/asset/css/style.css">
  <?=$page_css?>

  <!-- font -->
  <script>
    (function(d) {
      var config = {
        kitId: 'jvl7wnr',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>

</head>