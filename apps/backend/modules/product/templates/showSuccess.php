<table>
    <tbody>
        <tr>
            <th>L&iacute;nea</th>
            <td><?php echo $product->getProductLine() ?></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><?php echo $product->getName() ?></td>
        </tr>
        <tr>
            <th>Descripcion corta</th>
            <td><?php echo $product->getDescriptionShort() ?></td>
        </tr>
        <tr>
            <th>Presentaci&oacute;n</th>
            <td><?php echo $product->getSize() ?></td>
        </tr>
        <tr>
            <th>Imagen</th>
            <td><img src="/uploads/<?php echo $product->getImage() ?>" /></td>
        </tr>
    </tbody>
</table>

<div class="bottom-buttons">
<a href="<?php echo url_for('product/edit?id=' . $product->getId()) ?>">Editar</a>
<a href="<?php echo url_for('product/index') ?>">Volver al listado</a>
</div>