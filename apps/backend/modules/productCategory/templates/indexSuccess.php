<h1>Product categorys List</h1>

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
    <?php foreach ($product_categorys as $product_category): ?>
    <tr>
      <td><a href="<?php echo url_for('productCategory/show?id='.$product_category->getId()) ?>"><?php echo $product_category->getId() ?></a></td>
      <td><?php echo $product_category->getName() ?></td>
      <td><?php echo $product_category->getDescription() ?></td>
      <td><?php echo $product_category->getImage() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('productCategory/new') ?>">New</a>
