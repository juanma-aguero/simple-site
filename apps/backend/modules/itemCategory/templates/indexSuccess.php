<h1>Item categorys List</h1>

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
    <?php foreach ($item_categorys as $item_category): ?>
    <tr>
      <td><a href="<?php echo url_for('itemCategory/show?id='.$item_category->getId()) ?>"><?php echo $item_category->getId() ?></a></td>
      <td><?php echo $item_category->getName() ?></td>
      <td><?php echo $item_category->getDescription() ?></td>
      <td><?php echo $item_category->getImage() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('itemCategory/new') ?>">New</a>
