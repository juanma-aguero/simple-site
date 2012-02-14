<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<link type="text/css" href="/css/rich-text.css" rel="stylesheet" />
<script type="application/javascript" src="/js/jquery-1.6.2.min.js"></script>
<script type="application/javascript" src="/js/rich-text.js"></script>
<div>
    <form action="<?php echo url_for('product/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
        <?php if (!$form->getObject()->isNew()): ?>
            <input type="hidden" name="sf_method" value="put" />
        <?php endif; ?>
        <?php echo $form->renderHiddenFields(); ?>
        <div class="form-new">
            <div><?php
                echo $form['product_line_id']->renderError();
                echo $form['product_line_id']->renderLabel();
                echo $form['product_line_id']?>
            </div>
            <div><?php
                echo $form['name']->renderError();
                echo $form['name']->renderLabel();
                echo $form['name']?>
            </div>
            <div><?php
                echo $form['description_short']->renderError();
                echo $form['description_short']->renderLabel();
                echo $form['description_short']?>
            </div>
            <div><?php
                echo $form['size']->renderError();
                echo $form['size']->renderLabel();
                echo $form['size']?>
            </div>
            <div><?php echo $form['image']->renderRow() ?></div>

        </div>
        <br/>
        <div class="bottom-buttons">
            <?php if (!$form->getObject()->isNew()): ?>
                &nbsp;<?php echo link_to('Eliminar', 'product/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Estas seguro?')) ?>
<?php endif; ?>

            <input type="submit" value="Guardar" />
        </div>
    </form>
</div>

