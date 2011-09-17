<h1>Services List</h1>
<div>
    <form action="" method="get">
        <label>Buscar</label>
        <input type="text" id="busqueda"/>
        <button onclick="buscar()">Buscar</button>
    </form>
    <a href="<?php echo url_for('service/new') ?>">Nuevo Servicio</a>
</div>

<br/>

<div class="listadoTabla">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service): ?>
                <tr>
                    <td><a href="<?php echo url_for('service/show?id=' . $service->getId()) ?>"><?php echo $service->getId() ?></a></td>
                    <td><?php echo $service->getName() ?></td>
                    <td><?php echo $service->getDescription() ?></td>
                    <td><?php echo $service->getImage() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
