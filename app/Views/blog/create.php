<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    
    <div class="container">
        <div class="row">
        <h1><?= $title ?></h1>
        <form action="<?= base_url('blog/store') ?>" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <input type="text" name="excerpt" class="form-control" id="excerpt">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Example textarea</label>
                <textarea class="form-control" name="content" id="content" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            
        </div>
    </div>
    
<?= $this->endSection() ?>

