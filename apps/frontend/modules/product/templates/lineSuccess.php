<?php slot('content-left') ?>
<div class='category-menu'>
    <?php foreach ($productLines as $productLine): ?>
        <a <?php if ($lineSelected == $productLine->getId()) {
        echo 'class="selected"';
    } ?> href='<?php echo url_for('product/line?id=' . $productLine->getId()) ?>'><?php echo $productLine ?></a>
<?php endforeach; ?>
</div>
<?php end_slot() ?>


<div id="product-list-thumbs">
<?php foreach ($products as $product): ?>
        <div class="product-thumbs">
            <div class="product-image-thumbs">
                <a><img src="/uploads/thumbnails/<?php echo $product->getImage() ?>"/></a>
            </div>
            <div class="product-description-thumbs" onclick="showProduct(<?php echo $product->getId() ?>, '<?php echo $product ?>')">
                <a><?php echo $product ?></a>
            </div>
        </div>
<?php endforeach; ?>
</div>

<div id="product-list">
<?php foreach ($products as $product): ?>
        <div id="<?php echo $product->getId() ?>">
            <div class="product">
                <div class="product-image">
                    <a><img src="/uploads/thumbnails/<?php echo $product->getImage() ?>"/></a>
                </div>
                <div class="product-description">
                    <a href="<?php echo url_for('product/show?id=' . $product->getId()) ?>"><?php echo $product ?></a>
                    <p><?php echo $product->getDescriptionShort() ?></p>
                    <span class="">Precio: <?php echo $product->getPrice() ?></span>
                </div>
            </div>
        </div>
<?php endforeach; ?>
</div>
