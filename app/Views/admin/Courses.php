<?= $this->extend('Components/AdminLayout') ?>

<?= $this->section('content') ?>

    <?= $this->include('Components/AdminBanner') ?>

    <div class="container-fluid row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="<?php echo base_url('OnlineCodeEvaluator/public/admin/teachers')?>" class="list-group-item list-group-item-action">Teachers</a>
                <a href="<?php echo base_url('OnlineCodeEvaluator/public/admin/courses')?>" class="list-group-item list-group-item-action active">Courses</a>
                <a href="#" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body card-body-head">
                    <h4 class="card-title text-center">Courses</h4>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="<?php echo base_url('OnlineCodeEvaluator/public/admin/addCourse')?>" type="button" class="btn btn-secondary"><i class="fas fa-plus"></i> Add Course</a>
                        </div>
                        <div class="col-md-8">
                            <form class="form-row" action="" method="post">
                                <div class="form-group col-md-8">
                                    <input type="text" class="form-control" name="search-course" placeholder="Enter Course ID...">
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-row">
                                        <div class="col-md-1"></div>
                                        <button type="submit" name="submit-search-course" class="btn btn-primary col-md-5">Search</button>
                                        <div class="col-md-1"></div>
                                        <button type="submit" name="submit-all-course" class="btn btn-primary col-md-5">View All</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="table table-sm table-hover mt-2">
                        <thead>
                        <tr>
                            <th scope="col">Course ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">View</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>Larry the Bird</td>
                            <td>Thornton</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>