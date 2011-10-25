<h1>Línea de productos</h1>

<div>
    <form action="" method="get">
        <label>Buscar</label>
        <input type="text" id="busqueda"/>
        <button onclick="buscar()">Buscar</button>
    </form>
    <a href="<?php echo url_for('productLine/new') ?>">Nueva línea de productos</a>
</div>

<br/>

<div class="listadoTabla">
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripci&oacute;n</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product_lines as $product_line): ?>
                <tr>
                    <td><?php echo $product_line->getName() ?></td>
                    <td><?php echo $product_line->getDescription() ?></td>
                    <td><a href="<?php echo url_for('productLine/show?id=' . $product_line->getId()) ?>">Ver</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
