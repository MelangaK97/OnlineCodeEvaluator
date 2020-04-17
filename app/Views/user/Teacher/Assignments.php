<?= $this->extend('Components/TeacherLayout') ?>

<?= $this->section('content') ?>

<?= $this->include('Components/TeacherNavbar') ?>

    <div class="container-fluid container-user row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>Course ID</h2>
                    <h3>Course Title</h3>
                </div>
                <div class="card-body">
                    <a href="<?php echo base_url('OnlineCodeEvaluator/public/Teacher/Graded')?>" class="assignment-link">
                        <div class="card mb-2">
                            <div class="card-header">Assignment 01</div>
                        </div>
                    </a>
                    <a href="<?php echo base_url('OnlineCodeEvaluator/public/Teacher/Graded')?>" class="assignment-link">
                        <div class="card mb-2">
                            <div class="card-header">Assignment 02</div>
                        </div>
                    </a>
                    <a href="<?php echo base_url('OnlineCodeEvaluator/public/Teacher/Graded')?>" class="assignment-link">
                        <div class="card mb-2">
                            <div class="card-header">Assignment 03</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>