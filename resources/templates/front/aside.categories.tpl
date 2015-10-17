{foreach $categories as $category}
    <a href="category.php?id={$category['id']}" class="list-group-item">{$category['title']}</a>
{/foreach}