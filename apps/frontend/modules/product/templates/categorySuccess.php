<div id="container-left">
    <div style="margin-top: 55px;">
    <?php foreach ($categorys as $category): ?>
        <a class="category-menu" href="<?php echo url_for('product/category?id=' . $category->getId()) ?>" ><?php echo $category ?></a>
    <?php endforeach; ?>
    </div>
</div>

<div id="container-center">
    <div id="product-list">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <div class="product-image">
                    <a href=""><img src="/uploads/thumbnails/<?php echo $product->getImage() ?>"/></a>
                </div>
                <div class="product-description">
                    <a href=""><?php echo $product ?></a>
                    <p><?php echo $product->getDescription() ?></p>
                    <span class=""><?php echo $product->getPrice() ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div id="container-right">

</div>