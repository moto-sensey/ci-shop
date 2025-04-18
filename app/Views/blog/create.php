<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    
<?php helper('form') ?>

    <div class="container">
        <div class="row">
        <h1><?= $title ?></h1>
        <?= form_open(base_url('blog/store')) ?>
        <div class="mb-3">
                <?= form_label('Title', 'title', ['class' => 'form-label']) ?>
                <?= form_input([
                    'type' => 'text',
                    'name' => 'title',
                    'class' => 'form-control',
                    'id' => 'title'
                ]); ?>
            </div>
            <div class="mb-3">
                <?= form_label('Excerpt', 'excerpt', ['class' => 'form-label']) ?>
                <?= form_input([
                    'type' => 'text',
                    'name' => 'excerpt',
                    'class' => 'form-control',
                    'id' => 'excerpt'
                ]); ?>
            </div>
            <div class="mb-3">
                <?= form_label('Enter your text', 'content', ['class' => 'form-label']) ?>
                <?= form_textarea([
                    'name' => 'content',
                    'class' => 'form-control',
                    'id' => 'content',
                    'rows' => 10
                ]); ?>
            </div>
            <?= form_button([
                'type' => 'submit',
                'class' => 'btn btn-primary',
                'content' => 'Create post'
            ]); ?>
        <?= form_close() ?>  
        </div>
    </div>
    
<?= $this->endSection() ?>

