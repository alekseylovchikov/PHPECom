{foreach $products as $product}
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <span class="pull-left"><a href="item.php?id={$product['id']}">{$product['title']}</a></span>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
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
            <a href="item.php?id={$product['id']}"><img class="img-responsive img-thumbnail" src="img/{$product['image']}" alt="{$product['title']}" /></a>
            <div class="caption">
                <p>{substr($product['desc'], 0, 200)}...</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="pull-right text-center price">{number_format($product['price'])} руб.</h4>
                </div>
            </div>
        </div>
    </div>
{/foreach}