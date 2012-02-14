<table>
  <tbody>
    <tr>
      <th>Name:</th>
      <td><?php echo $service->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $service->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('service/edit?id='.$service->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('service/index') ?>">List</a>
