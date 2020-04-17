<?= $this->extend('Components/StudentLayout') ?>

<?= $this->section('content') ?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/Welcome_Banner_03.png') ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/Welcome_Banner_02.png') ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/Welcome_Banner_04.png') ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a class="btn btn-outline-secondary welcome-link" href="<?php echo base_url('OnlineCodeEvaluator/public/Home/Login?type=teacher') ?>">Teacher</a>
                <a class="btn btn-outline-secondary welcome-link" href="<?php echo base_url('OnlineCodeEvaluator/public/Home/Login?type=student') ?>">Student</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?= $this->endSection() ?>
