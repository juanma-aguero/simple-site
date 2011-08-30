<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $service->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $service->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $service->getDescription() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $service->getImage() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('service/edit?id='.$service->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('service/index') ?>">List</a>
