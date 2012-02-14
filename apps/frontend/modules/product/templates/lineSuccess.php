<?php slot('title','nuestros productos') ?>
<?php slot('content-left') ?>
<div class='category-menu'>
    <?php foreach ($productLines as $productLine): ?>
        <a <?php if ($lineSelected == $productLine->getId()) {
        echo 'class="selected"';
    } ?> href='<?php echo url_for('product/line?id=' . $productLine->getId()) ?>'><?php echo $productLine ?></a>
    <!--
    <a href="http://www.lidherma.com/" target="_blank" >Lidherma</a>
    <a href="http://www.nahrin.com.ar/" target="_blank" >Nahrin</a> -->
<?php endforeach; ?>
</div>
<?php end_slot() ?>


<div id="product-list-thumbs">
<?php foreach ($products as $product): ?>
        <div class="product-thumbs">
            <div class="product-image-thumbs">
                <a><img src="/uploads/thumbnails/<?php if( $product->getImage() == null ){ echo "default-thumb.jpg";} else {echo $product->getImage();} ?>" alt="/images/default-thumb.jpg" /></a>
            </div>
            <div class="product-description-thumbs" onclick="showProduct(<?php echo $product->getId() ?>, '<?php echo $product ?>')">
                <span><?php echo $product ?></span>
            </div>
        </div>
<?php endforeach; ?>
</div>

<div id="product-list">
<?php foreach ($products as $product): ?>
        <div id="<?php echo $product->getId() ?>">
            <div class="product">
                <div class="product-image">
                    <a><img src="/uploads/<?php if( $product->getImage() == null ){ echo "default.jpg";} else {echo $product->getImage();} ?>"/></a>
                </div>
                <div class="product-description">
                    <a><?php echo $product ?></a>
                    <p><?php echo $product->getDescriptionShort() ?></p>
                    <br/>
                    <span class="product-presentation">Presentaci&oacute;n: <?php echo $product->getSize() ?></span>
                </div>
            </div>
        </div>
<?php endforeach; ?>
</div>
