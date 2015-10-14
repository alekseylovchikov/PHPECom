<?php

$result = $shop->get_top_products();

if ($result) {
    $show_top = "";
    while ($row = $result->fetch_assoc()) {
        $cut_description = strip_tags(substr($row['product_description'], 0, 200));
        $price = number_format($row['product_price']);
        
        $show_top .= '<div class="col-sm-4 col-lg-4 col-md-4">';
        $show_top .= '<div class="thumbnail">';
        $show_top .= '<div class="row"><div class="col-md-6">';
        $show_top .= '<h4 class="pull-left"><a href="product/' . $row['product_id'] . '">' . $row['product_title'] . '</a></h4>';
        $show_top .= '</div><div class="col-md-6">';
        // product rating
        $show_top .= '<h4 class="pull-right">';
        // get product rating from db
        $count_rating = $row['product_rating'];
        
        // fix not correct rating
        if ($count_rating > 5 || $count_rating < 1) {
            $count_rating = $count_rating > 5 ? 5 : 1;
        }
        
        $i = 0;
        while ($count_rating != $i) {
            $i++;
            $show_top .= '<span class="glyphicon glyphicon-star"></span>';
        }
        $show_top .= '</h4>';
        $show_top .= '</div></div>';
        $show_top .= '<img class="img-responsive" src="../../public/img/' . $row['product_image'] . '" alt="" />';
        $show_top .= '<div class="caption">';
        $show_top .= '<p>' . $cut_description . '...</p>';
        $show_top .= '</div>';
        $show_top .= '<div class="row">';
        $show_top .= '<div class="col-md-6">';
        $show_top .= '<h4 class="pull-left price text-center">' . $price . ' руб.</h4>';
        $show_top .= '</div>';
        $show_top .= '<div class="col-md-6"><a class="btn btn-success pull-right" href="add/' . $row['product_id'] . '" title="Добавить в корзину"><span class="glyphicon glyphicon-plus"></span></a></div>';
        $show_top .= '</div>';
        $show_top .= '</div>';
        $show_top .= '</div>';
    }
    
    echo $show_top;
} else {
    echo "Error get top products!<br />";
}