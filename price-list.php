<?php
/*
Template Name: Прайс Лист
*/
?>

<?php 
$file = carbon_get_theme_option( 'price_list' );
$url = wp_get_attachment_image_url($file);
?>

<?php $page_id = get_the_ID(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="Семена овощей Благовещенск Амурская область, Зеленая биржа. Продажа семян, оптовая продажа семян. Магазин семян Благовещенск, семена продажа Амурская область, семена продажа Благовещенск, саженцы, семена тыквенных, семена арбузов, семена баклажан, семена бобовых, ягодны растения, капуста, рассада, рассада оптом, капуста, купить семена, купить семена в благовещенске." />
    <meta name="description" content="Оптово-розничный магазин семян Зеленая биржа Благовещенск Амурская область. Магазин семян Благовещенск. Заказать и купить оптом семена, удобрения и сопутствующие товары." />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог - Семена</title>
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/image/logo.svg">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/price-list.css">

    <!--
        Bootstrap 5
    -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="wrapper">
    <nav class="navbar navbar-expand-lg">
            <div class="container">
                <img src="<?php echo get_template_directory_uri(); ?>/image/logo.svg" alt="">
                <span class='span-brand'>Семена</span>
              <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Главная</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/#about-us">О компании</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/#footer&contacts">Контакты</a>
                  </li>
                </ul>
                <form action="" class="d-flex pe-4 pt-2 pb-2 rounded" style='background-color: orange;'>
                    <a href="/catalog" class='nav-link text-white ps-4 pe-2' style='border-right: 1px solid white;'>
                      Каталог
                    </a>
                    <a href="/price-list" class='nav-link text-white ps-2 pe-2'>
                      Опт
                    </a>
                </form>
              </div>
            </div>
        </nav>
        <div class="container-fluid" style='min-height: 100vh;'>
            <div class="pb-5">
                <div class="circles">
                    <div class="circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/circle-up.png" alt="">
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
                <table class="table">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">Дата</th>
                            <th scope="col">Наименование</th>
                            <th scope="col">Ссылка</th>
                        </tr>
                    </thead>
                    <tbody class='text-center'>
                        <tr>
                            <td class='d-flex align-items-center pb-3 pt-4 justify-content-center'><?php echo carbon_get_theme_option('file_date-one'); ?></td>
                            <td class='pt-4'><?php echo carbon_get_theme_option('file_name-one'); ?></td>
                            <td>
                                <button class='button-list' onclick="document.location=<?php echo carbon_get_theme_option('file_text-one'); ?>'"><a href="<?php echo carbon_get_theme_option('file_text-one'); ?>" class='nav-link text-black'>Скачать</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td class='d-flex align-items-center pb-3 pt-4 justify-content-center'><?php echo carbon_get_theme_option('file_date-two'); ?></td>
                            <td class='pt-4'><?php echo carbon_get_theme_option('file_name-two'); ?></td>
                            <td>
                                <button class='button-list' onclick="document.location=<?php echo carbon_get_theme_option('file_text-two'); ?>'"><a href="<?php echo carbon_get_theme_option('file_text-two'); ?>" class='nav-link text-black'>Скачать</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td class='d-flex align-items-center pb-3 pt-4 justify-content-center'><?php echo carbon_get_theme_option('file_date-three'); ?></td>
                            <td class='pt-4'><?php echo carbon_get_theme_option('file_name-three'); ?></td>
                            <td>
                                <button class='button-list' onclick="document.location=<?php echo carbon_get_theme_option('file_text-three'); ?>'"><a href="<?php echo carbon_get_theme_option('file_text-three'); ?>" class='nav-link text-black'>Скачать</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td class='d-flex align-items-center pb-3 pt-4 justify-content-center'><?php echo carbon_get_theme_option('file_date-four'); ?></td>
                            <td class='pt-4'><?php echo carbon_get_theme_option('file_name-four'); ?></td>
                            <td>
                                <button class='button-list' onclick="document.location=<?php echo carbon_get_theme_option('file_text-four'); ?>'"><a href="<?php echo carbon_get_theme_option('file_text-four'); ?>" class='nav-link text-black'>Скачать</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td class='d-flex align-items-center pb-3 pt-4 justify-content-center'><?php echo carbon_get_theme_option('file_date-five'); ?></td>
                            <td class='pt-4'><?php echo carbon_get_theme_option('file_name-five'); ?></td>
                            <td>
                                <button class='button-list' onclick="document.location=<?php echo carbon_get_theme_option('file_text-five'); ?>'"><a href="<?php echo carbon_get_theme_option('file_text-five'); ?>" class='nav-link text-black'>Скачать</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td class='d-flex align-items-center pb-3 pt-4 justify-content-center'><?php echo carbon_get_theme_option('file_date-six'); ?></td>
                            <td class='pt-4'><?php echo carbon_get_theme_option('file_name-six'); ?></td>
                            <td>
                                <button class='button-list' onclick="document.location=<?php echo carbon_get_theme_option('file_text-six'); ?>'"><a href="<?php echo carbon_get_theme_option('file_text-six'); ?>" class='nav-link text-black'>Скачать</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td class='d-flex align-items-center pb-3 pt-4 justify-content-center'><?php echo carbon_get_theme_option('file_date-seven'); ?></td>
                            <td class='pt-4'><?php echo carbon_get_theme_option('file_name-seven'); ?></td>
                            <td>
                                <button class='button-list' onclick="document.location=<?php echo carbon_get_theme_option('file_text-seven'); ?>'"><a href="<?php echo carbon_get_theme_option('file_text-seven'); ?>" class='nav-link text-black'>Скачать</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td class='d-flex align-items-center pb-3 pt-4 justify-content-center'><?php echo carbon_get_theme_option('file_date-eight'); ?></td>
                            <td class='pt-4'><?php echo carbon_get_theme_option('file_name-eight'); ?></td>
                            <td>
                                <button class='button-list' onclick="document.location=<?php echo carbon_get_theme_option('file_text-eight'); ?>'"><a href="<?php echo carbon_get_theme_option('file_text-eight'); ?>" class='nav-link text-black'>Скачать</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td class='d-flex align-items-center pb-3 pt-4 justify-content-center'><?php echo carbon_get_theme_option('file_date-nine'); ?></td>
                            <td class='pt-4'><?php echo carbon_get_theme_option('file_name-nine'); ?></td>
                            <td>
                                <button class='button-list' onclick="document.location=<?php echo carbon_get_theme_option('file_text-nine'); ?>'"><a href="<?php echo carbon_get_theme_option('file_text-nine'); ?>" class='nav-link text-black'>Скачать</a></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php get_footer() ?>
    </div>
    <script src="https://kit.fontawesome.com/3f104a38eb.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
  
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/price-list.js"></script>

</body>
</html>