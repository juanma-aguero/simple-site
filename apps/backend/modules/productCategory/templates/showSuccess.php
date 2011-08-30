<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $product_category->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $product_category->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $product_category->getDescription() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $product_category->getImage() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('productCategory/edit?id='.$product_category->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('productCategory/index') ?>">List</a>
