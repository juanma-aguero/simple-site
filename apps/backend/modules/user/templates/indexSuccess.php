<h1>Users List</h1>
<div class="listadoTabla">
<table>
  <thead>
    <tr>
      <th>Tipo de usuario</th>
      <th>Usuario</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
      <td><?php echo $user->getUserType() ?></td>
      <td><?php echo $user->getUsername() ?></td>
      <td><a href="<?php echo url_for('user/show?id='.$user->getId()) ?>">Ver</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
  <a href="<?php echo url_for('user/new') ?>">New</a>
