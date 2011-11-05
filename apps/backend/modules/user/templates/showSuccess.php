<table>
    <tbody>
        <tr>
            <th>Usuario</th>
            <td><?php echo $user->getUsername() ?></td>
        </tr>
        <tr>
            <th>Tipo de usuario</th>
            <td><?php echo $user->getUserType() ?></td>
        </tr>
    </tbody>
</table>

<div class="bottom-buttons">
    <a href="<?php echo url_for('user/edit?id=' . $user->getId()) ?>">Editar</a>
    &nbsp;
    <a href="<?php echo url_for('user/index') ?>">Lista</a>
</div>
