<?= $this->extend('Components/StudentLayout') ?>

<?= $this->section('content') ?>

    <?= $this->include('Components/Navbar') ?>

    <div class="container-fluid container-user row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-10">
                        <h2>My Courses</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4">
                            <a href="#">
                                <div class="card">
                                    <div class="row mt-3">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/undraw_resume_folder_2_arse.svg')?>" class="card-img-top" alt="...">
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <div class="card-header mt-2">
                                        <h5 class="card-title">Course ID</h5>
                                        <p class="card-text">Course Title</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="#">
                                <div class="card">
                                    <div class="row mt-3">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/undraw_resume_folder_2_arse.svg')?>" class="card-img-top" alt="...">
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <div class="card-header mt-2">
                                        <h5 class="card-title">Course ID</h5>
                                        <p class="card-text">Course Title</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="#">
                                <div class="card">
                                    <div class="row mt-3">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/undraw_resume_folder_2_arse.svg')?>" class="card-img-top" alt="...">
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <div class="card-header mt-2">
                                        <h5 class="card-title">Course ID</h5>
                                        <p class="card-text">Course Title</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="#">
                                <div class="card">
                                    <div class="row mt-3">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/undraw_resume_folder_2_arse.svg')?>" class="card-img-top" alt="...">
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <div class="card-header mt-2">
                                        <h5 class="card-title">Course ID</h5>
                                        <p class="card-text">Course Title</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
