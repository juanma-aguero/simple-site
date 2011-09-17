<div>
    <?php foreach ($categorys as $category): ?>
        <a class='category-menu' href='<?php echo url_for('product/category?id='.$category->getId()) ?>' ><?php echo $category ?></a>
    <?php endforeach; ?>
</div>