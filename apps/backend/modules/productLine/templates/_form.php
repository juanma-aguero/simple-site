<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('productLine/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
    <div class="bottom-buttons">
        <a href="<?php echo url_for('productLine/index') ?>">Volver al listado</a>
        <input type="submit" value="Guardar" />
        <?php if (!$form->getObject()->isNew()): ?>
            <?php echo link_to('Delete', 'productLine/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
        <?php endif; ?>
    </div>
</form>
