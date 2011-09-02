
<div>
<table>
    <tbody>
        <tr>
            <th>Nombre:</th>
            <td><?php echo $product_category->getName() ?></td>
        </tr>
        <tr>
            <th>Descripcion:</th>
            <td><?php echo $product_category->getDescription() ?></td>
        </tr>
    </tbody>
</table>
</div>

<br/>

<div class="bottom-buttons">
    <a href="<?php echo url_for('productCategory/edit?id=' . $product_category->getId()) ?>">Editar</a>
</div>
