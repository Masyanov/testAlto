<?php
/**
 * Рассчет товара по цене
 */
$products = array(
    0 => array(
        "name" => "Футболка",
        "price" => "18"
    ),
    1 => array(
        "name" => "Футболка 2",
        "price" => "20"
    ),
    2 => array(
        "name" => "Футболка",
        "price" => "13"
    ),
    3 => array(
        "name" => "Футболка 2",
        "price" => "29"
    ),
    4 => array(
        "name" => "Футболка",
        "price" => "30"
    ),
    5 => array(
        "name" => "Футболка 2",
        "price" => "34"
    ),
    6 => array(
        "name" => "Футболка",
        "price" => "43"
    ),
    7 => array(
        "name" => "Футболка",
        "price" => "40"
    ),
    8 => array(
        "name" => "Футболка 2",
        "price" => "33"
    ),
    9 => array(
        "name" => "Футболка",
        "price" => "12"
    ),
    10 => array(
        "name" => "Футболка 2",
        "price" => "22"
    ),
    11 => array(
        "name" => "Футболка",
        "price" => "28"
    ),
    12 => array(
        "name" => "Футболка 2",
        "price" => "21"
    )
);
$counter = 0;
foreach ($products as $product) :
    if ($product->price > $CHOICEPRICE_OT | $product->price < $CHOICEPRICE_DO):
        $counter++;
    endif;
endforeach;
$GLOBALS['counter_products'] = $counter;
