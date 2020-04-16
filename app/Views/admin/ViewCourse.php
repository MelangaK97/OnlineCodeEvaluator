<?= $this->extend('Components/AdminLayout') ?>

<?= $this->section('content') ?>

    <?= $this->include('Components/AdminBanner') ?>

    <div class="container-fluid row mt-5">
        <div class="col-md-5 icon-view-course row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/undraw_resume_folder_2_arse.svg')?>" alt="add course">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-title card-title-details m-1">
                    <h4 class="text-center m-2">Course Details</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-md-3">Course ID : </label>
                        <label class="col-md-9">CS1324</label>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Title : </label>
                        <label class="col-md-9">Computer Science</label>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Teachers : </label>
                        <label class="col-md-9">Teacher01, Teacher02, Teacher03</label>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-8"></div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-secondary add-btn">Hide</button>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-danger add-btn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>