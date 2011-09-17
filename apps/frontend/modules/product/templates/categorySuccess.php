<?php slot('content-left') ?>
<div class='category-menu'>
    <?php foreach ($categorys as $category): ?>
        <a <?php if( $categorySelected == $category->getId()){ echo 'class="selected"'; }?> href='<?php echo url_for('product/category?id=' . $category->getId()) ?>'><?php echo $category ?></a>
    <?php endforeach; ?>
</div>
<?php end_slot() ?>


<div id="product-list">
    <?php foreach ($products as $product): ?>
        <div class="product">
            <div class="product-image">
                <a href=""><img src="/uploads/thumbnails/<?php echo $product->getImage() ?>"/></a>
            </div>
            <div class="product-description">
                <a href="<?php echo url_for('product/show?id=' . $product->getId()) ?>"><?php echo $product ?></a>
                <p><?php echo $product->getDescriptionShort() ?></p>
                <span class=""><?php echo $product->getPrice() ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</div>
