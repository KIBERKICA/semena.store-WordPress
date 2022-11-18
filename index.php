<?php
/*
Template Name: Главная
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="Семена овощей Благовещенск Амурская область, Зеленая биржа. Продажа семян, оптовая продажа семян. Магазин семян Благовещенск, семена продажа Амурская область, семена продажа Благовещенск, саженцы, семена тыквенных, семена арбузов, семена баклажан, семена бобовых, ягодны растения, капуста, рассада, рассада оптом, капуста, купить семена, купить семена в благовещенске." />
    <meta name="description" content="Оптово-розничный магазин семян Зеленая биржа Благовещенск Амурская область. Магазин семян Благовещенск. Заказать и купить оптом семена, удобрения и сопутствующие товары." />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная - Семена</title>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/image/logo.svg">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media-two.css">

    <!--
        Bootstrap 5
    -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
      <?php get_header() ?>
        <div class="container-fluid">
          <div class="circles">
            <div class="circle">
              <img class='w-100' src="<?php echo get_template_directory_uri(); ?>/image/circle-up.png" alt="">
            </div>
          </div>
          <img class="img-flower w-75" src="<?php echo get_template_directory_uri(); ?>/image/png-transparent-apple-nature-tree-agriculture-blade-PhotoRoom 1.png" alt="">
          <div class="container">
            <div class="row">
              <div class="col-md-6 d-flex flex-column">
                <p class="main-title fw-bold">
                  <?php echo carbon_get_theme_option('home_page_header_title'); ?>
                </p>
                <p class="text-black fw-bold fs-6"><?php echo carbon_get_theme_option('home_page_header_subtitle'); ?></p>
                <div class="flower">
                  <img src="<?php echo get_template_directory_uri(); ?>/image/flower-1.png" alt="">
                  <span class="fw-bold fs-6"><?php echo carbon_get_theme_option('home_page_header_assortment'); ?></span>
                </div>
              </div>
              <div class="col-md-6">
                <img class='w-100' src="<?php echo get_template_directory_uri(); ?>/image/vegetables-up.png" alt="">
              </div>
            </div>
          </div>
          <div class="container pb-5">
            <div class="row" style="position: relative; top: 100px; z-index: 1111;">
              <div class="col-md-3 mx-5 d-flex mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/image/flower.png" alt="">
                <div>
                  <p><?php echo carbon_get_theme_option('home_page_intermediate'); ?></p>
                </div>
              </div>
              <div class="col-md-3 mx-5 d-flex mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/image/hat.png" alt="">
                <div>
                  <p><?php echo carbon_get_theme_option('home_page_intermediate_two'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid about-us position-relative p-1" id='about-us'>
          <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/image/flower-2.png" alt="">
          <div class="container about">
            <div class="row">
              <div class="col" style="z-index: 1111;">
                <p class="fs-1 fw-bold" style="color: #7E9200;">Немного о нас</p>
                <p class='fs-5'>
                  <?php echo carbon_get_theme_option('home_page_about_one'); ?>
                </p>
                <p  class='fs-5'>
                  <?php echo carbon_get_theme_option('home_page_about_two'); ?>
                </p>
              </div>
              <div class="col-md-8">
                <div class="position-relative d-flex flex-column align-items-center justify-content-center">
                  <img  src="<?php echo get_template_directory_uri(); ?>/image/ten-flower.png" class="ten-flower w-75" alt="">
                  <p class="fw-bold text-center title-years position-absolute text-white years-title"><?php echo carbon_get_theme_option('home_page_about_years'); ?></p>
                  <div class="years d-flex justify-content-center align-items-center p-1 ps-4 pe-4">
                    <p class="text-center pt-2">лет на рынке</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid content-offer mt-3">
          <div class="circles">
            <div class="circle">
              <img class='w-100' src="<?php echo get_template_directory_uri(); ?>/image/circle-up.png" alt="">
            </div>
          </div>  
          <div class="container offer pt-5">
            <p class="fw-bold text-center">
              Мы предлагаем
            </p>
            <div class="row">
              <div class="col-md-6">
                <img class='w-100' src="<?php echo get_template_directory_uri(); ?>/image/Group 64.png" alt="">
              </div>
              <div class="col">
                <p><?php echo carbon_get_theme_option('home_page_offer_one'); ?></p>
                <p>
                  <span>
                    <?php echo carbon_get_theme_option('home_page_offer_two'); ?>
                  </span>
                </p>
                <p>
                  <?php echo carbon_get_theme_option('home_page_offer_three'); ?>
                </p>
                <ul>
                  <li><span><?php echo carbon_get_theme_option('home_page_offer_four'); ?></span></li>
                  <li><span><?php echo carbon_get_theme_option('home_page_offer_five'); ?></span></li>
                  <li><span><?php echo carbon_get_theme_option('home_page_offer_six'); ?></span></li>
                  <li><span><?php echo carbon_get_theme_option('home_page_offer_seven'); ?></span></li>
                </ul>
                <p><?php echo carbon_get_theme_option('home_page_offer_eight'); ?></p>
                <p>
                  <span>
                    <?php echo carbon_get_theme_option('home_page_offer_nine'); ?>
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid content-news">
          <img class="flower-news" src="<?php echo get_template_directory_uri(); ?>/image/46-20220208_123901 1.png" alt="">
          <div class="container">
            <h1 class="fw-bold">Новости</h1>
            <h5 class="fw-bold"><?php echo carbon_get_theme_option('home_page_news_price'); ?></h5>
            <div class="row w-100">
              <div class="col-md-5 pb-5 mb-3">
                <div class="news-up__image">
                  <img class='w-100' src="<?php echo get_template_directory_uri(); ?>/image/54918717 1.png" alt="">
                  <div class="circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/Group 8.png" alt="">
                  </div>
                </div>
                <p class="fw-bold"><?php echo carbon_get_theme_option('home_page_news_title'); ?></p>
                <h4 class="fw-bold pb-5">
                  <?php echo carbon_get_theme_option('home_page_news_subtitle'); ?>
                </h4>
              </div>
              <div class="col-md-5 mb-3">
                <div class="news-up__image">
                  <img class='w-100' src="<?php echo get_template_directory_uri(); ?>/image/54918717 1.png" alt="">
                  <div class="circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/Group 9.png" alt="">
                  </div>
                </div>
                <p class="fw-bold"><?php echo carbon_get_theme_option('home_page_news_title_two'); ?></p>
                <h4 class="fw-bold"><?php echo carbon_get_theme_option('home_page_news_subtitle_two'); ?></h4>
              </div>
            </div>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/image/1614569750_34-p-vetka-na-belom-fone-51 13.png" alt="" class="flower-news__two">
        </div>
        <?php get_footer() ?>
    </div>
    <script src="https://kit.fontawesome.com/3f104a38eb.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>