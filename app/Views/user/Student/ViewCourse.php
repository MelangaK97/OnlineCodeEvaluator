<?= $this->extend('Components/StudentLayout') ?>

<?= $this->section('content') ?>

    <?= $this->include('Components/Navbar') ?>

    <div class="container-fluid container-user row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>Course ID</h2>
                    <h3>Course Title</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Teacher: </h5>
                    <p>Teacher Name</p>
                    <h5 class="card-title">Description: </h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab, amet assumenda cum debitis dicta dolores ducimus eius eligendi expedita fugiat id inventore ipsam laborum libero, magnam necessitatibus obcaecati officiis omnis qui quia, reprehenderit repudiandae sit sunt veniam veritatis voluptate. Aspernatur deleniti enim error labore odit quibusdam quos sit ullam!</p>
                    <a href="<?php echo base_url('OnlineCodeEvaluator/public/Home/ViewAssignment?type=in-progress')?>" class="assignment-link">
                        <div class="card mb-2">
                            <div class="card-header">Assignment 01 (In-Progress)</div>
                        </div>
                    </a>
                    <a href="<?php echo base_url('OnlineCodeEvaluator/public/Home/ViewAssignment?type=graded')?>" class="assignment-link">
                        <div class="card mb-2">
                            <div class="card-header">Assignment 02 (Graded)</div>
                        </div>
                    </a>
                    <a href="<?php echo base_url('OnlineCodeEvaluator/public/Home/ViewAssignment?type=overdue')?>" class="assignment-link">
                        <div class="card mb-2">
                            <div class="card-header">Assignment 03 (Overdue)</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>