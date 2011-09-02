<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<div>
    <form action="<?php echo url_for('product/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
        <?php if (!$form->getObject()->isNew()): ?>
            <input type="hidden" name="sf_method" value="put" />
        <?php endif; ?>
        <div>
            <table style="margin: auto;">
                <tbody>
                    <?php echo $form ?>
                </tbody>
            </table>
        </div>
        <br/>
        <div style="text-align: center; border-top: 1px #555 solid;">
            <?php if (!$form->getObject()->isNew()): ?>
                &nbsp;<?php echo link_to('Eliminar', 'product/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Estas seguro?')) ?>
            <?php endif; ?>

            <input type="submit" value="Guardar" />
        </div>
    </form>
</div>
