<?php

// required functions and main class
require_once("../resources/Shop.class.php");

// create object
$shop = new Shop();

?>

<?php
                    
$result = $shop->get_all_categories();

$data = array();

while ($r = $result->fetch_assoc()) {
    $data[] = array(
        "id" => $r['cat_id'],
        "title" => $r['cat_title']
    );
}

$smarty->assign("categories", $data);

$smarty->display("front/header.tpl");

?>

    <div class="jumbotron">
        <header class="container">
            <h1 class="text-center"><span class="label label-info">BrandShop</span></h1>
        </header>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- categories -->
            <div class="col-md-3">
                <h4>Категории</h4>
                <div class="list-group">
                    <?php
                    
                    $result = $shop->get_all_categories();
                    
                    $data = array();
                    
                    while ($r = $result->fetch_assoc()) {
                        $data[] = array(
                            "id" => $r['cat_id'],
                            "title" => $r['cat_title']
                        );
                    }
                    
                    $smarty->assign("categories", $data);
                    
                    $smarty->display("front/aside.categories.tpl");
                    
                    ?>
                </div>
            </div><!-- end categories -->
            
            <div class="col-md-9">
                <div class="row carousel-holder">
                    <!-- carousel -->
                    <?php $smarty->display("front/carousel.tpl"); ?>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <h4 class="alert alert-danger text-center">Новинки</h4>
                    </div>
                    
                    <!-- new products -->
                    <?php
                    
                    $result = $shop->get_new_products();
                    
                    $data = array();
                    
                    while ($r = $result->fetch_assoc()) {
                        $data[] = array(
                            "id" => $r['product_id'],
                            "title" => $r['product_title'],
                            "desc" => $r['product_description'],
                            "rating" => $r['product_rating'],
                            "image" => $r['product_image'],
                            "price" => $r['product_price']
                        );
                    }
                    
                    $smarty->assign("products", $data);
                    
                    $smarty->display("front/new.products.tpl");
                    
                    ?>
                    <!-- end new products -->
                    
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <h4 class="alert alert-warning text-center">Популярные товары</h4>
                    </div>
                    
                    <!-- top products -->
                    <?php
                    
                    $result = $shop->get_top_products();
                    
                    $data = array();
                    
                    while ($r = $result->fetch_assoc()) {
                        $data[] = array(
                            "id" => $r['product_id'],
                            "title" => $r['product_title'],
                            "desc" => $r['product_description'],
                            "rating" => $r['product_rating'],
                            "image" => $r['product_image'],
                            "price" => $r['product_price']
                        );
                    }
                    
                    $smarty->assign("products", $data);
                    
                    $smarty->display("front/top.products.tpl");
                    
                    ?>
                    <!-- end top products -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    
<?php $smarty->display("front/footer.tpl"); ?>