<div class="row">
    <div class="col-md-12">
        <!-- CREATE TPL -->
        <ol class="breadcrumb">
            <li><a href="/public/">Главная</a></li>
            <li><a href="category.php?id={$product['category']}">{$category_name}</a></li>
        </ol>
        <!-- -->
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><span class="lead">{$product['title']}</span></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="fotorama" data-allowfullscreen="true" data-loop="true">
                            {foreach $images as $image}
                                <img class="img-responsive" src="img/{$image}" alt="{$product['title']}" title="{$product['title']}" />
                            {/foreach}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well well-sm">
                                    {assign var = counter value = 5 - $product['rating']}
                                    
                                    {for $from = 1 to $product['rating']}
                                        <span class="glyphicon glyphicon-star"></span>
                                    {/for}
                                    
                                    {if $counter != 0}
                                        {for $from = 1 to $counter}
                                            <span class="glyphicon glyphicon-star-empty"></span>    
                                        {/for}
                                    {/if}
                                </div>
                            </div>
                        </div>
                        <p>{$product['desc']}</p>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text-center pull-left lead price">{$product['price']} руб.</span>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-success pull-right" href="item.php?id={$product['id']}">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4 class="alert alert-warning text-center">Похожие товары</h4>
                        <div class="row">
                            <div class="col-md-4">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>