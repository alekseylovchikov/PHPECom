<?php 

require_once("../resources/config.php");

// create shop object
$shop = new Shop();

?>

<?php require(TEMPLATE_FRONT . DS . "header.php"); ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="logo">
                <div class="jumbotron">
                    <header>
                        <h1 class="text-center">Winter PHP Shop</h1>
                        <h4 class="text-center">by alekseylovchikov</h4>
                    </header>
                </div>
            </div>
            <!-- categories -->
            
            <?php require(TEMPLATE_FRONT . DS . "side.nav.php"); ?>
            
            <div class="col-md-9">
                <div class="row carousel-holder">
                    <!-- carousel -->
                    <?php require(TEMPLATE_FRONT . DS . "carousel.php"); ?>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <h4 class="alert alert-warning text-center">Top Products</h4>
                    </div>
                    <!-- top products -->
                    <?php require(TEMPLATE_FRONT . DS . "top.products.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    
<?php require(TEMPLATE_FRONT . DS . "footer.php"); ?>