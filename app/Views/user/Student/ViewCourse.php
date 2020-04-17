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
                    <h5 class="card-title">Teacher</h5>
                    <p class="card-text">Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab, amet assumenda cum debitis dicta dolores ducimus eius eligendi expedita fugiat id inventore ipsam laborum libero, magnam necessitatibus obcaecati officiis omnis qui quia, reprehenderit repudiandae sit sunt veniam veritatis voluptate. Aspernatur deleniti enim error labore odit quibusdam quos sit ullam!</p>
                    <a href="#" class="assignment-link">
                        <div class="card mb-2">
                            <div class="card-header">Assignment Title</div>
                        </div>
                    </a>
                    <a href="#" class="assignment-link">
                        <div class="card mb-2">
                            <div class="card-header">Assignment Title</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>