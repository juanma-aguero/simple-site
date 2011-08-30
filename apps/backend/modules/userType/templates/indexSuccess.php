<h1>User types List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($user_types as $user_type): ?>
    <tr>
      <td><a href="<?php echo url_for('userType/show?id='.$user_type->getId()) ?>"><?php echo $user_type->getId() ?></a></td>
      <td><?php echo $user_type->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('userType/new') ?>">New</a>
