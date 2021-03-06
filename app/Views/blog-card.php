<div class="container-lg p-4">
    <div class="display-3 text-muted text-center">Latest Blog Post</div>
    <?= $this->include('divider') ;?>
    <div class="row pt-4">
    <?php foreach($first_three as $three) : ?>
        <div class="col pt-2">
            <div class="card" style="width: 18rem;">
                <?php if(empty($three['cover_image'])) : ?>
                    <img src="/assets/messi.jpg" class="card-img-top img-fluid" alt="">
                <?php else: ?>
                    <img src="/assets/uploads/<?= esc($three['cover_image']) ?>" class="card-img-top img-fluid" alt="">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title fw-bold"><?= esc($three['title']) ?></h5>
                    <p class="card-text"><?= excerpt($three['content']) ?></p>
                    <span class="text-muted">
                    <?= esc($three['created_at']) ?> by Admin</span> <br>
                    <a href="/p/<?= esc($three['slug']) ?>" class="btn btn-outline-primary">Read more</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="pt-3 text-center">
            <a href="/posts" class="btn btn-outline-primary">Explore</a>
            <!-- <nav aria-label="Page navigation example">
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
            </nav> -->
        </div>
    </div>
</div>
