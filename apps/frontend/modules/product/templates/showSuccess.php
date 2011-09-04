<div>
    <div>
      <label><?php echo $product->getName() ?></label>
    </div>
    <div>
      <label><?php echo $product->getProductCategory() ?></label>
    </div>
    <div>
      <?php echo $product->getDescriptionLong(ESC_RAW) ?>
    </div>
    <div>
      <label>Precio</label>
      <span><?php echo $product->getPrice() ?></span>
    </div>
    <div>
      <img src="/uploads/thumbnails/<?php echo $product->getImage() ?>"/>
    </div>
</div>


