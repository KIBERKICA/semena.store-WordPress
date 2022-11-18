<?php
/*
Template Name: Каталог
*/
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
              <img src="<?php echo get_template_directory_uri(); ?>/image/circle-up.png" alt="">
            </div>
          </div>
          <section class="section section-catalog js-section-catalog" id="section-catalog">
            <div class="container">
              <header class="section__header">
                <h2 class="page-title page-title--accent"><?php echo carbon_get_post_meta( $page_id, 'catalog_title' ); ?></h2>
                <nav class="catalog-nav">
                  
                  <?php
                    $catalog_nav = carbon_get_post_meta($page_id, 'catalog_nav');
                    $catalog_nav_ids = wp_list_pluck($catalog_nav, 'id');
                    
                    $catalog_nav_items = get_terms([
                      'include' => $catalog_nav_ids,
                    ]);
                  ?>
                  <ul class="catalog-nav__wrapper">
                    <li class="catalog-nav__item" style='display: none;'>
                      <button class="catalog-nav__btn is-active" type="button" data-filter="all"></button>
                    </li>

                    <?php foreach ($catalog_nav_items as $item) : ?>
                      <li class="catalog-nav__item">
                        <button class="catalog-nav__btn" type="button" data-filter="<?php echo $item->slug; ?>"><?php echo $item->name; ?></button>
                      </li>
                    <?php endforeach; ?>

                  </ul>
                </nav >
              </header>

              <?php
                $catalog_products = carbon_get_post_meta( $page_id, 'catalog_products' );
                $catalog_products_ids = wp_list_pluck($catalog_products, 'id');

                $catalog_products_args = [
                  'post_type' => 'product',
                  'post__in' => $catalog_products_ids
                ];
                $catalog_products_query = new WP_Query( $catalog_products_args );

                $catalog_products_count = wp_count_posts('product');
                $catalog_products_count_publish = $catalog_products_count->pulish;
              ?>


            <div class="catalog js-catalog">
              <?php if ( $catalog_products_query->have_posts() ) : ?>

                <?php while ( $catalog_products_query->have_posts() ) : $catalog_products_query->the_post(); ?>
                  <?php echo get_template_part('product-content'); ?>
                <?php endwhile; ?>

              <?php endif; ?>

            </div>

            </div>
          </section>
        </div>
        <?php get_footer() ?>
    </div>
    <script src="https://kit.fontawesome.com/3f104a38eb.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
  
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>