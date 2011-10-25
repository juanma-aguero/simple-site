<table>
    <tbody>
        <tr>
            <th>Nombre</th>
            <td><?php echo $product_line->getName() ?></td>
        </tr>
        <tr>
            <th>Descripci&oacute;n</th>
            <td><?php echo $product_line->getDescription() ?></td>
        </tr>
    </tbody>
</table>

<div class="bottom-buttons">
    <a href="<?php echo url_for('productLine/edit?id=' . $product_line->getId()) ?>">Editar</a>
    <a href="<?php echo url_for('productLine/index') ?>">Volver al listado</a>
</div>
