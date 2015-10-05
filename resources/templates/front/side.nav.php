<div class="col-md-3">
    <h4>Categories</h4>
    <div class="list-group">
        <?php
        
        $result = $shop->get_category();
        
        if ($result) {
            $li = "";
            while ($row = $result->fetch_assoc()) {
                $li .= "<a href='/category/{$row["cat_id"]}' class='list-group-item'>{$row["cat_title"]}</a>";
            }
            echo $li;
        } else {
            echo "<br />No category...";
        }
        
        ?>
    </div>
</div>