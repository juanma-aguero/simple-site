<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $product->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $product->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $product->getDescription() ?></td>
    </tr>
    <tr>
      <th>Price:</th>
      <td><?php echo $product->getPrice() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $product->getImage() ?></td>
    </tr>
    <tr>
      <th>Product category:</th>
      <td><?php echo $product->getProductCategoryId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('product/edit?id='.$product->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('product/index') ?>">List</a>
