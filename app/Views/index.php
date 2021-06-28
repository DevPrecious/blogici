<?= $this->extend('layouts/index') ;?>

<?= $this->section('content') ;?>

<div class="container-lg p-5">
    <div class="row justify-content-center align-items-center">
        <?php if(empty($latest_post)) : ?>
            <div class="col-md-5">
                <h5>Latest Post</h5>
                <div class="display-6 text-muted">Windows 11 Latest</div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit aspernatur neque et eligendi minima veniam sunt, assumenda hic suscipit perspiciatis rerum aperiam, dignissimos a tempore, est nisi minus tempora sed.
                <div class="pt-4">
                    <a href="#" class="btn btn-outline-primary">Read</a>
                </div>
                </div>
            <div class="col pt-4">
                <img src="/assets/win11.jpg" class="img-fluid" alt="">
            </div>
        <?php else : ?>
            <div class="col-md-5">
                <h5>Latest Post</h5>
                <div class="display-6 text-muted"><?= esc($latest_post['title']) ?></div>
                <?= excerpt(esc($latest_post['content'])) ?>
                <div class="pt-4">
                <a href="/p/<?= esc($latest_post['slug']) ?>" class="btn btn-outline-primary">Read</a>
                </div>
                </div>
            <div class="col pt-4">
                <?php if(empty(esc($latest_post['cover_image']))) : ?>
                    <img src="/assets/win11.jpg" class="img-fluid" alt="">
                <?php else : ?>
                    <img src="/assets/uploads/<?= esc($latest_post['cover_image']) ?>" class="img-fluid" alt="">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->include('blog-card') ;?>
<?= $this->include('about-hero') ;?>

<?= $this->endSection() ;?>