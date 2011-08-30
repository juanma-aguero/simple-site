<h1>Services List</h1>

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
      <td><a href="<?php echo url_for('service/show?id='.$service->getId()) ?>"><?php echo $service->getId() ?></a></td>
      <td><?php echo $service->getName() ?></td>
      <td><?php echo $service->getDescription() ?></td>
      <td><?php echo $service->getImage() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('service/new') ?>">New</a>
