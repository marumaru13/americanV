<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <title>American Villege</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="section1">
            <div　class="content">
                <div class="header_items">
                <div class="hamburger_rap">
                 <input type="checkbox" id="hamburger">
                 <label class="hamburger" for="hamburger">
                 <span class="pate"></span>
                 </label>  

                 <div class="inner">
                    <p class="menu">Menu01</p>
                    <p class="menu">Menu02</p>
                    <p class="menu">Menu03</p>
                    <p class="menu">Menu04</p>
                 </div>
                </div>
                <div class="box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png" alt="" class="img_01">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="img_02">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" alt="" class="img_03">
                </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_sp.png" alt="" class="spimg_01">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_sp.png" alt="" class="spimg_03">
                <p class="left">進化し続ける『街』<br class="br_sp">アメリカンビレッジマガジン</p>

            </div>
        </div>
    </header>
