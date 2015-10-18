<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="/public/">Главная</a></li>
			<li class="active">{$category['title']}</li>
		</ol>
	</div>
	{foreach $products as $product}
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><a href="item.php?id={$product['id']}">{$product['title']}</a></div>
				<div class="panel-body">
			    	<div class="row">
						<div class="col-md-12">
							<a href="item.php?id={$product['id']}"><img class="img-responsive" src="img/{$product['image']}" alt="{$product['title']}" title="{$product['title']}" /></a>
						</div>
						<div class="col-md-12">
							<hr />
							<p>{substr($product['desc'], 0, 200)}...</p>
						</div>
						<div class="col-md-12">
							<h4 class="text-center pull-right price">{number_format($product['price'])} руб.</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	{/foreach}
</div>