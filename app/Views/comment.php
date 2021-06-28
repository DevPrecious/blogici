<div class="container-lg pt-4">
    <?= $this->include('divider') ;?>
    <div class="display-5 text-muted">
        Comments
    </div>
        <div class="pt-3">
            <?php foreach($comments as $comment) : ?>
                <div class="row border border-primary rounded border-1">
                    <p><?= esc($comment['name']) ?>: </p>
                    <div class="pl-2">
                        <?= esc($comment['comment']) ?>
                    </div>
                </div>
                <div class="pt-2"></div>
            <?php endforeach; ?>
        </div>
        <div class="container-lg pt-2 mb-0">
        <?= $this->include('messages/msg') ;?>
        </div>
        <div class="pl-4 pt-2">
            <form action="" method="POST">
                <input type="hidden" name="post_id" value="<?= esc($post['post_id']) ?>" class="form-control" placeholder="Name">
                <input type="text" name="name" id="" class="form-control" placeholder="Name">
                <div class="form-floating pt-2">
                    <textarea class="form-control" name="comment" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>
                <div class="form-group pt-2">
                    <button type="submit" class="btn btn-outline-primary">Comment</button>
                </div>    
            </form>
        </div>
    </div>
</div>