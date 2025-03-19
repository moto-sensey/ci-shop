<div class="col-md-4">
<div class="card">
  <div class="card-img">
    <img src="<?= base_url($post['image']) ?>" class="card-img-top img" alt="::: No Image :::">
  </div>
  
  <div class="card-body">
    <h5 class="card-title"><?= $post['title'] ?></h5>
    <p class="card-text"><?= $post['excerpt'] ?></p>
    <a href="<?=site_url("blog/{$post['id']}")  ?>" class="btn btn-primary">Read more</a>
  </div>
</div>
</div>



