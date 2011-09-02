<script type="text/javascript">
    function buscar(){
        
    }
</script>

<h1>Productos</h1>

<div>
    <form action="" method="get">
        <label>Buscar</label>
        <input type="text" id="busqueda"/>
        <button onclick="buscar()">Buscar</button>
    </form>
    <a href="<?php echo url_for1("product/new")?>" >Nuevo Producto</a>
</div>
<br/>
<div class="listadoTabla">
    <table>
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product->getProductCategory() ?></td>
                    <td><?php echo $product->getName() ?></td>
                    <td><?php echo $product->getDescription() ?></td>
                    <td><?php echo $product->getPrice() ?></td>
                    <td><a href="<?php echo url_for('product/show?id=' . $product->getId()) ?>">Ver</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
</div>