<?= $this->extend('Components/AdminLayout') ?>

<?= $this->section('content') ?>

    <?= $this->include('Components/AdminBanner') ?>

    <div class="container-fluid row mt-5">
        <div class="col-md-5 icon-view-teacher row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/undraw_teaching_f1cm.svg')?>" alt="add course">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-title card-title-details m-1">
                    <h4 class="text-center m-2">Teacher Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-md-3">Name : </label>
                        <label class="col-md-9">First Name + Last Name</label>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Email Address : </label>
                        <label class="col-md-9">teacher01@email.com</label>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Home Address : </label>
                        <label class="col-md-9">16:38:47.136: [OnlineCodeEvaluator] git -c credential.helper= -c core</label>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Telephone : </label>
                        <label class="col-md-9">0714545458</label>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Courses : </label>
                            <label class="col-md-9">CS1234, CS3425, CS3456</label>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-8"></div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-secondary add-btn">Disable</button>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-danger add-btn">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>