<h1>Categorías de productos</h1>
<div>
    <form action="" method="get">
        <label>Buscar</label>
        <input type="text" id="busqueda"/>
        <button onclick="buscar()">Buscar</button>
    </form>
    <a href="<?php echo url_for1("productCategory/new")?>" >Nueva Categoría</a>
</div>
<br/>
<div class="listadoTabla">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product_categorys as $product_category): ?>
                <tr>
                    <td><?php echo $product_category->getName() ?></td>
                    <td><?php echo $product_category->getDescription() ?></td>
                    <td><a href="<?php echo url_for('productCategory/show?id=' . $product_category->getId()) ?>">Ver</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

