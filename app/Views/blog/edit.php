<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <?php helper('form'); ?>
    <div class="container">
        <div class="row">
        <h1><?= $title ?></h1>
        <?= form_open(route_to('post_update', $post['id'])); ?>
            <div class="mb-3">
                <?= form_label('Title', 'title', ['class' => 'form-label']) ?>
                <?= form_input([
                    'type' => 'text',
                    'name' => 'title',
                    'class' => 'form-control',
                    'id' => 'title',
                    'value' => $post['title']
                ]); ?>
            </div>
            <div class="mb-3">
                <?= form_label('Excerpt', 'excerpt', ['class' => 'form-label']) ?>
                <?= form_input([
                    'type' => 'text',
                    'name' => 'excerpt',
                    'class' => 'form-control',
                    'id' => 'excerpt',
                    'value' => $post['excerpt']
                ]); ?>
            </div>
            <div class="mb-3">
                <?= form_label('Enter your text', 'content', ['class' => 'form-label']) ?>
                <?= form_textarea([
                    'name' => 'content',
                    'class' => 'form-control',
                    'id' => 'content',
                    'value' => $post['content'],
                    'rows' => 10
                ]); ?>
            </div>
            <?= form_button([
                'type' => 'submit',
                'class' => 'btn btn-primary',
                'content' => 'Update post'
            ]); ?>
        <?= form_close(); ?>  
        </div>
    </div>
    
<?= $this->endSection() ?>

