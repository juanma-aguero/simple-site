<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $item_category->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $item_category->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $item_category->getDescription() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $item_category->getImage() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('itemCategory/edit?id='.$item_category->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('itemCategory/index') ?>">List</a>
