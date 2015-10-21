<?php

// BEGIN required functions and class
require_once("../resources/Shop.class.php");

// create shop object
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

<div class="container">
    <div class="row">
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
        </div>
        
        <div class="col-md-9">
            <?php

            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $product_id = intval($_GET['id']);
                
                // function get product by id
                $result = $shop->get_product($product_id);
                
                if ($result) {
                    $r = $result->fetch_assoc();
                    
                    $product = array(
                        "id" => $r['product_id'],
                        "title" => $r['product_title'],
                        "desc" => $r['product_description'],
                        "price" => number_format($r['product_price']),
                        "rating" => $r['product_rating'],
                        "category" => $r['product_category_id']
                    );
                    
                    $images = explode(",", $r['product_image']);

                    // get category name for this product
                    $category = $shop->get_category($product['category']);
                    $r_cat = $category->fetch_assoc();

                    $category_title = $r_cat['cat_title'];
                    
                    // assign all to item
                    $smarty->assign("product", $product);
                    $smarty->assign("images", $images);
                    $smarty->assign("category_name", $category_title);
                    
                    $smarty->display("front/product.tpl");   
                } else {
                    $smarty->display("front/404.tpl");
                }
            } else {
                $shop->redirect("/public/");
            }
            
            ?>    
        </div>
    </div>
</div>

<?php $smarty->display("front/footer.tpl"); ?>