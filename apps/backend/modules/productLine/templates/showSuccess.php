<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $product_line->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $product_line->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $product_line->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('productLine/edit?id='.$product_line->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('productLine/index') ?>">List</a>
