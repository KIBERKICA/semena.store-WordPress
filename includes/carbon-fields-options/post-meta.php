<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Дополнительные поля' )
  ->show_on_page(9)

  ->add_tab( 'Каталог', [
    Field::make( 'text', 'catalog_title', 'Заголовок' ),
    Field::make( 'association', 'catalog_nav', 'Категории товаров' )
    ->set_types( [
        [
            'type'      => 'term',
            'taxonomy' => 'product-categories',
        ]
    ] ),
    Field::make( 'association', 'catalog_products', 'Товары' )
    ->set_types( [
        [
            'type'      => 'post',
            'post_type' => 'product',
        ]
     ] )
  ]);

    Container::make( 'post_meta', 'Дополнительные поля' )
  ->show_on_post_type('product')

  ->add_tab( 'Информация товара', [
      Field::make( 'text', 'product_price', 'Цена' ),
  ]);

  Container::make( 'theme_options', 'Прайс лист' )
  ->add_tab( 'Прайс лист - первый', [
    Field::make( 'text', 'file_date-one', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-one', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-one', __( 'Введите ссылку для первого файла Excel' ) )
  ])
  ->add_tab( 'Прайс лист - второй', [
    Field::make( 'text', 'file_date-two', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-two', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-two', __( 'Введите ссылку для второго файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - третий', [
    Field::make( 'text', 'file_date-three', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-three', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-three', __( 'Введите ссылку для третьего файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - четвертый', [
    Field::make( 'text', 'file_date-four', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-four', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-four', __( 'Введите ссылку для четвертого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - пятый', [
    Field::make( 'text', 'file_date-five', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-five', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-five', __( 'Введите ссылку для пятого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - шестой', [
    Field::make( 'text', 'file_date-six', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-six', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-six', __( 'Введите ссылку для шестого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - седьмой', [
    Field::make( 'text', 'file_date-seven', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-seven', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-seven', __( 'Введите ссылку для седьмого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - восьмой', [
    Field::make( 'text', 'file_date-eight', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-eight', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-eight', __( 'Введите ссылку для восьмого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - девятый', [
    Field::make( 'text', 'file_date-nine', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-nine', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-nine', __( 'Введите ссылку для девятого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - десятый', [
    Field::make( 'text', 'file_date-ten', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-ten', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-ten', __( 'Введите ссылку для десятого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - одиннадцатый', [
    Field::make( 'text', 'file_date-eleven', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-eleven', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-eleven', __( 'Введите ссылку для одиннадцатого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - двенадцатый', [
    Field::make( 'text', 'file_date-twelfth', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-twelfth', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-twelfth', __( 'Введите ссылку для двенадцатого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - тринадцатый', [
    Field::make( 'text', 'file_date-thirteen', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-thirteen', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-thirteen', __( 'Введите ссылку для тринадцатого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - четырнадцатый', [
    Field::make( 'text', 'file_date-fourteenth', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-fourteenth', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-fourteenth', __( 'Введите ссылку для четырнадцатого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ])
  ->add_tab( 'Прайс лист - пятнадцать', [
    Field::make( 'text', 'file_date-fifteen', __( 'Введите актуальную дату прайса ( xx.xx.xxxx )' ) ),
    Field::make( 'text', 'file_name-fifteen', __( 'Введите название файла ( Прайс Листа )' ) ),
    Field::make( 'text', 'file_text-fifteen', __( 'Введите ссылку для пятнадцатого файла Excel ( взять можно при добавление файла в медиафайлы )' ) )
  ]);

  Container::make( 'theme_options', 'Настройка содержимого сайта' )
  ->add_tab( 'Шапка', [
    Field::make( 'text', 'home_page_header_title', __( 'Введите текст ( Чтобы окрасит текст в зеленый, введите <span> сам текст </span> )' ) ),
    Field::make( 'text', 'home_page_header_subtitle', __( 'Введите текст' ) ),
    Field::make( 'text', 'home_page_header_assortment', __( 'Введите текст' ) ),
  ])
  ->add_tab( 'Промежуточный блок между 1 и 2', [
    Field::make( 'text', 'home_page_intermediate', __( 'Введите текст ( Первое слово в <span> слово </span>, второе за его пределами )' ) ),
    Field::make( 'text', 'home_page_intermediate_two', __( 'Введите текст ( Первое слово в <span> слово </span>, второе за его пределами )' ) ),
  ])
  ->add_tab( 'О нас', [
    Field::make( 'text', 'home_page_about_one', __( 'Введите текст ( Чтобы окрасит текст в зеленый, введите <span> сам текст </span> )' ) ),
    Field::make( 'text', 'home_page_about_two', __( 'Введите текст ( Чтобы окрасит текст в зеленый, введите <span> сам текст </span> )' ) ),
    Field::make( 'text', 'home_page_about_years', __( 'Введите число сколько лет вы на рынке' ) ),
  ])
  ->add_tab( 'Мы предлагаем', [
    Field::make( 'text', 'home_page_offer_one', __( 'Введите текст ( Чтобы окрасит текст в красный, введите <span> сам текст </span> )' ) ),
    Field::make( 'text', 'home_page_offer_two', __( 'Введите текст' ) ),
    Field::make( 'text', 'home_page_offer_three', __( 'Введите текст' ) ),
    Field::make( 'text', 'home_page_offer_four', __( 'Введите текст' ) ),
    Field::make( 'text', 'home_page_offer_five', __( 'Введите текст' ) ),
    Field::make( 'text', 'home_page_offer_six', __( 'Введите текст' ) ),
    Field::make( 'text', 'home_page_offer_seven', __( 'Введите текст' ) ),
    Field::make( 'text', 'home_page_offer_eight', __( 'Введите текст ( Чтобы окрасит текст в красный, введите <span> сам текст </span> )' ) ),
    Field::make( 'text', 'home_page_offer_nine', __( 'Введите текст' ) ),
  ])
  ->add_tab( 'Новости', [
    Field::make( 'text', 'home_page_news_price', __( 'Введите текст ( Цена пакета )' ) ),
    Field::make( 'text', 'home_page_news_title', __( 'Введите текст ( Для первого )' ) ),
    Field::make( 'text', 'home_page_news_subtitle', __( 'Введите текст ( Для первого )' ) ),
    Field::make( 'text', 'home_page_news_title_two', __( 'Введите текст ( Для второго )' ) ),
    Field::make( 'text', 'home_page_news_subtitle_two', __( 'Введите текст ( Для второго )' ) ),
  ])
  ->add_tab( 'Контакты', [
    Field::make( 'text', 'home_page_contacts_title', __( 'Введите заголовок' ) ),
    Field::make( 'text', 'home_page_contacts_address', __( 'Введите адрес' ) ),
    Field::make( 'text', 'home_page_contacts_number', __( 'Введите номер телефона' ) ),
    Field::make( 'text', 'home_page_contacts_email', __( 'Введите почту' ) ),
  ]);