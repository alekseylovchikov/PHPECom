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

<div class="container" style="margin-top:30px">
	<div class="row">
		<div class="col-md-12">
	    	<div class="panel panel-default">
	  			<div class="panel-heading">
	  				<h3 class="panel-title"><strong>Вход </strong></h3>
	  			</div>
	  			<div class="panel-body">
	   				<form role="form">
	  					<div class="form-group">
	    					<label for="exampleInputEmail1">Логин или Email</label>
	    					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email или логин" />
	  					</div>
	  					<div class="form-group">
	    					<label for="exampleInputPassword1">Пароль <a href="/sessions/forgot_password">(Забыли пароль?)</a></label>
	    					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль" />
	  					</div>
	  					<button type="submit" class="btn btn-sm btn-default">Войти</button>
					</form>
	  			</div>
			</div>
		</div>
	</div>
</div>

<?php $smarty->display("front/footer.tpl"); ?>