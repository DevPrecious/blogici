<?= $this->extend('layouts/index') ;?>

<?= $this->section('content') ;?>

<div class="container-lg p-4">
    <div class="pt-4 text-center">
        <div class="display-4 text-dark pt-4 pb-3">Posts</div>
        <?= $this->include('divider') ;?>
    </div>
    <div class="row pt-4">
    <?php foreach($posts as $post) : ?>
        <div class="col pt-2">
            <div class="card" style="width: 18rem;">
                <?php if(empty($three['cover_image'])) : ?>
                    <img src="/assets/messi.jpg" class="card-img-top img-fluid" alt="">
                <?php else: ?>
                    <img src="/assets/uploads/<?= esc($post['cover_image']) ?>" class="card-img-top img-fluid" alt="">
                <?php endif; ?>
                <div class="card-body">
                    <div class="card-title"><?= esc($post['title']) ?></div>
                    <p class="card-text">
                        <?= excerpt(esc($post['content'])) ?>
                    </p>
                    <span class="text-muted"><?= esc($post['created_at']) ?> by Admin</span> <br>
                    <a href="/p/<?= esc($post['slug']) ?>" class="btn btn-outline-primary">Read more</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?= $pager->links() ?>

        <!-- <div class="pt-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div> -->
    </div>
</div>

<?= $this->endSection() ;?>