<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="/">Главная</a></li>
			<li class="active">{$category['title']}</li>
		</ol>
	</div>
	<div class="col-md-12">
		<div class="well">
			<div class="btn-group">
				<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Сортировать по <span class="caret"></span>
			  	</button>
				<ul class="dropdown-menu">
			    	<li><a href="?id={$category['id']}&price=toup">возростанию цены</a></li>
			    	<li><a href="?id={$category['id']}&price=todown">убыванию цены</a></li>
			  	</ul>
			</div>
		</div>
	</div>
	{assign var = count value = 0}
	
	{foreach $products as $product}
		{assign var = i value = $count++}
		
		{if $i % 3 == 0 && $i > 0}
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<hr />
			</div>
		{/if}
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
							<a href="item.php?id={$product['id']}">{$product['title']}</a>
						</div>
						<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
							<span class="pull-left">
								{assign var=counter value=5-$product['rating']}
                    
		                        {for $from = 1 to $product['rating']}
		                            <span class="glyphicon glyphicon-star"></span>
		                        {/for}
		                        
		                        {if $counter != 0}
		                            {for $from = 1 to $counter}
		                                <span class="glyphicon glyphicon-star-empty"></span>    
		                            {/for}
		                        {/if}
							</span>
						</div>
					</div>
				</div>
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