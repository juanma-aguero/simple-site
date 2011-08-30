<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $user_type->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $user_type->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('userType/edit?id='.$user_type->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('userType/index') ?>">List</a>
