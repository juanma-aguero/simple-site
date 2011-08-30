<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $item->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $item->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $item->getDescription() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $item->getImage() ?></td>
    </tr>
    <tr>
      <th>Item category:</th>
      <td><?php echo $item->getItemCategoryId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('item/edit?id='.$item->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('item/index') ?>">List</a>
