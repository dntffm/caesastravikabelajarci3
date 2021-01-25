<div class="container">

<form method="post" action="<?=base_url('index.php/book/update/')?>">
    <input type="hidden" name="id" value="<?=$book[0]["id"]?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input value="<?=$book[0]['title']?>" type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input value="<?=$book[0]['price']?>" type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">author</label>
    <input value="<?=$book[0]['author']?>" type="text" name="author" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">publisher</label>
    <input value="<?=$book[0]['publisher']?>" type="text" name="publisher" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">stock</label>
    <input value="<?=$book[0]['stock']?>" type="text" name="stock" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>