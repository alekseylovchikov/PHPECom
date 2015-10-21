<?php

// BEGIN required functions and class
require_once("../resources/Shop.class.php");

// create shop object
$shop = new Shop();

?>

<?php

// get all categories
$result = $shop->get_all_categories();

// init empty array for get categories
$data = array();

while ($r = $result->fetch_assoc()) {
    $data[] = array(
        "id" => $r['cat_id'],
        "title" => $r['cat_title']
    );
}

// assign all categories to header page
$smarty->assign("categories", $data);

// show header
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
                $category_id = intval($_GET['id']);
                
                // function get product by id
                $result = $shop->get_category($category_id);
                
                if ($result) {
                    $r = $result->fetch_assoc();
                    
                    $category = array(
                        "id" => $r['cat_id'],
                        "title" => $r['cat_title']
                    );

                    // get products from category id
                    if (isset($_GET['price']) && ($_GET['price'] == "toup" || $_GET['price'] == "todown")) {
                        $sort = $_GET['price'];
                    } else {
                        $sort = "";
                    }
                    
                    $products = $shop->get_products($category['id'], $sort);

                    // init empty array for products
                    $products_data = array();

                    if ($products) {
                        while ($product = $products->fetch_assoc()) {
                            $products_data[] = array(
                                "id" => $product['product_id'],
                                "title" => $product['product_title'],
                                "desc" => $product['product_description'],
                                "image" => explode(",", $product['product_image'])[0],
                                "price" => $product['product_price'],
                                "rating" => $product['product_rating']
                            );
                        }

                        // assign all data for category page
                        $smarty->assign("category", $category);
                        $smarty->assign("products", $products_data);
                        $smarty->assign("sort_url", $sort_url);

                        // display category page
                        $smarty->display("front/category.tpl");
                    } else {
                        $smarty->display("front/404.tpl");
                    }
                } else {
                    // display not found page
                    $smarty->display("front/404.tpl");
                }
            } else {
                // redirect to home page if get id not set
                $shop->redirect("/public/");
            }
            
            ?>    
        </div>
    </div>
</div>

<?php $smarty->display("front/footer.tpl"); ?>