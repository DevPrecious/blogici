<?= $this->extend('layouts/index') ;?>

<?= $this->section('content') ;?>

<div class="container-lg p-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5">
            <h5>To Be Viewed</h5>
            <div class="display-6 text-muted">How to get windows 11</div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure iusto reiciendis esse, quod perspiciatis quaerat officiis, corrupti ut inventore temporibus itaque! Atque maiores deleniti iure esse cum fugiat, repellendus fugit.
            <div class="pt-4">
                <button class="btn btn-outline-primary">Read</button>
            </div>
            </div>
        <div class="col pt-4">
            <img src="/assets/win11.jpg" class="img-fluid" alt="">
        </div>
    </div>
</div>

<?= $this->include('blog-card') ;?>
<?= $this->include('about-hero') ;?>

<?= $this->endSection() ;?>