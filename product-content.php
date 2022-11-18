<?php
  $product_id = get_the_ID();

  $product_price = carbon_get_post_meta($product_id, 'product_price');
  $product_attributes = carbon_get_post_meta($product_id, 'product_attributes');
  $product_img_src = get_the_post_thumbnail_url($product_id, 'product');
  $product_img_src_webp = convertToWebpSrc($product_img_src);

  $product_categories = get_the_terms($product_id, 'product-categories');
  $product_categories_str = '';
  foreach ($product_categories as $category) {
    $product_categories_str .= "$category->slug,";
  }
  $product_categories_str = substr($product_categories_str, 0, -1);

?>

<div class="catalog__item container-fluid" data-category="<?php echo $product_categories_str; ?>">
  <div class="js-product" data-product-name="<?php the_title(); ?>" data-product-price="<?php echo $product_price; ?>" <?php echo $product_data_attribute; ?> data-product-src="<?php echo get_the_post_thumbnail_url($product_id, 'product'); ?>">
<h3 class="product__title"><?php the_title(); ?></h3>
    <a class="product__img-link" href="<?php the_permalink(); ?>">
      <picture>
        <img style='  width: 340px;
  height: 207px;' src="<?php echo $product_img_src; ?>" alt="">
      </picture>
    </a>
    <p class="fs-3 fw-bold text-black text-wrap"><?php the_excerpt(); ?></p>
  </div>
</div>