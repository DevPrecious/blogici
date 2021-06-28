<?= $this->extend('layouts/index') ;?>

<?= $this->section('content') ;?>

<div class="container-lg p-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md pt-4">
            <!-- <div class="col pt-4"> -->
            <?php if(empty(esc($post['cover_image']))) : ?>
                <img src="/assets/win11.jpg" class="img-fluid" alt="">
            <?php else: ?>
                <img src="/assets/uploads/<?= esc($post['cover_image']) ?>" class="img-fluid" alt="">
            <?php endif; ?>
        </div>
        
        <div class="col-md-5">
            <h5>By Admin</h5>
            <div class="display-6 text-muted"><?= esc($post['title']) ?></div>
            <?= excerpt(esc($post['content'])) ?>
        </div>

        <div class="pt-4">
            <p>
                <?= esc($post['content']) ?>
            </p>
        </div>
        
    </div>

    <?= $this->include('related') ;?>

    <?= $this->include('comment') ;?>
</div>

<?= $this->endSection() ;?>