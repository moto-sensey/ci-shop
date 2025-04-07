<div class="col-md-4">
<div class="card">
  <div class="card-img">
    <img src="<?= base_url($post['image']) ?>" class="card-img-top img" alt="::: No Image :::">
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $post['title'] ?></h5>
    <p class="card-text"><?= $post['excerpt'] ?></p>
    <a href="<?=base_url("blog/{$post['id']}")  ?>" class="btn btn-primary">Read more</a>
    <a href="<?= route_to('post_edit', $post['id']) ?>" class="btn btn-success">Edit</a>
    <a href="<?= route_to('post_delete', $post['id']) ?>" class="btn btn-danger">Delete</a>
  </div>
</div>
</div>



