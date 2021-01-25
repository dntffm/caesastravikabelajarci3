<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($book as $index=>$item) { ?>

        <tr>
        <th scope="row"><?= $index+1?></th>
        <td><?=$item["title"]?></td>
        <td><?=$item["price"]?></td>
        <td>
            <a href="<?=base_url('index.php/book/edit/').$item["id"]?>" class="btn btn-info ">Edit</a>
        </td>
        <td>
            <a href="<?=base_url('index.php/book/delete/').$item["id"]?>" class="btn btn-danger ">Delete</a>
        </td>
        </tr>
    <?php } ?>
  
  </tbody>
</table>
</div>