<div class="row">
    <div class="col-md-12">
        <h4 class="alert alert-info text-center">{$product['title']}</h4>
    </div>
    <div class="col-md-6">
        <img class="img-thumbnail img-responsive" src="img/{$product['image']}" alt="{$product['title']}" title="{$product['title']}" />
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h4 class="pull-left"> 
                    {assign var=counter value=5-$product['rating']}
                    
                    {for $from=1 to $product['rating']}
                        <span class="glyphicon glyphicon-star"></span>
                    {/for}
                    
                    {if $counter != 0}
                        {for $from=1 to $counter}
                            <span class="glyphicon glyphicon-star-empty"></span>    
                        {/for}
                    {/if}
                </h4>
            </div>
        </div>
        <p>{$product['desc']}</p>
        <div class="row">
            <div class="col-md-6">
                <h4 class="price text-center pull-left">{$product['price']} руб.</h4>
            </div>
            <div class="col-md-6">
                <a class="btn btn-success pull-right" href="item.php?id={$product['id']}">Купить</a>
            </div>
        </div>
    </div>
</div>