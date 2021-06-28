<!-- Validation -->
<?php if(isset($validation)) : ?>
    <div class="alert alert-danger">
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>
<!-- Success message -->
<?php if(session()->get('success')) : ?>
    <div class="alert alert-success">
        <?= session()->get('success') ?>
    </div>
<?php endif; ?>