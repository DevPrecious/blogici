<div class="conatiner-lg pt-3">
    <?= $this->include('divider') ;?>
    <div class="display-6 text-dark text-center">
        Related Blog Posts
    </div>
    <div class="row pt-4">
    <?php foreach($related as $relate) : ?>
        <div class="col pt-2">
            <div class="card" style="width: 18rem;">
                <?php if(empty($relate['cover_img'])) : ?>
                    <img src="/assets/messi.jpg" class="card-img-top img-fluid" alt="">
                <?php else: ?>
                    <img src="/assets/uploads/<?= esc($relate['cover_img']) ?>" class="card-img-top img-fluid" alt="">
                <?php endif; ?>
                <div class="card-body">
                    <div class="card-title fw-bold"><?= esc($relate['title']) ?></div>
                    <p class="card-text">
                        <?= excerpt(esc(esc($relate['content']))) ?>
                    </p>
                    <span class="text-muted"><?= esc($relate['created_at']) ?> by Admin</span> <br>
                    <a href="/p/<?= esc($relate['slug']) ?>" class="btn btn-outline-primary">Read more</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
    <div class="pt-2 text-center">
        <a href="/posts/tag/<?= esc($post['tag']) ?>" class="btn btn-outline-primary">Explore</a>
    </div>
</div>