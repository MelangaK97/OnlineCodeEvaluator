<?= $this->extend('Components/TeacherLayout') ?>

<?= $this->section('content') ?>

<?= $this->include('Components/TeacherNavbar') ?>

<div class="container-fluid container-user row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h3>Course ID</h3>
                <h4>Assignment Name</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-9">
                                <label for="">Number of Enrolled Students :</label>
                            </div>
                            <div class="col-md-3">
                                <label for="">127</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <label for="">Number of Submitted Assignments :</label>
                            </div>
                            <div class="col-md-3">
                                <label for="">110</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form class="form-row" action="" method="post">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-7">
                                <input type="text" class="form-control" name="search-student" placeholder="Enter Student ID...">
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-row">
                                    <div class="col-md-1"></div>
                                    <button type="submit" name="submit-search-student" class="btn btn-primary col-md-5">Search</button>
                                    <div class="col-md-1"></div>
                                    <button type="submit" name="submit-all-student" class="btn btn-primary col-md-5">View All</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Student ID</th>
                                <th scope="col">Submitted at</th>
                                <th scope="col">Marks</th>
                                <th scope="col">Plagiarism</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>170298H</td>
                                <td>Friday, 6 March 2020, 11:50 PM</td>
                                <td>67.5</td>
                                <td>32%</td>
                                <td><a href="">Download</a></td>
                            </tr>
                            <tr>
                                <td>170307M</td>
                                <td>Friday, 6 March 2020, 10:50 PM</td>
                                <td>87.1</td>
                                <td>12%</td>
                                <td><a href="">Download</a></td>
                            </tr>
                            <tr>
                                <td>170311U</td>
                                <td>Friday, 6 March 2020, 11:10 PM</td>
                                <td>77.8</td>
                                <td>25%</td>
                                <td><a href="">Download</a></td>
                            </tr>
                            <tr>
                                <td>170313D</td>
                                <td>Friday, 6 March 2020, 11:42 PM</td>
                                <td>74.3</td>
                                <td>29%</td>
                                <td><a href="">Download</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
