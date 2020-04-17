<?= $this->extend('Components/TeacherLayout') ?>

<?= $this->section('content') ?>

<?= $this->include('Components/TeacherNavbar') ?>

<div class="container-fluid container-user row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Enrolled Students</h3>
                    </div>
                </div>
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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Submissions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>170298H</td>
                            <td>Melanga Kasun</td>
                            <td>melangaksn.17@cse.mrt.ac.lk</td>
                            <td>3/3</td>
                        </tr>
                        <tr>
                            <td>170307M</td>
                            <td>Srikandabala Kogul</td>
                            <td>kogul.17@cse.mrt.ac.lk</td>
                            <td>3/3</td>
                        </tr>
                        <tr>
                            <td>170311U</td>
                            <td>Shammi Kolonne</td>
                            <td>shammi.17@cse.mrt.ac.lk</td>
                            <td>3/3</td>
                        </tr>
                        <tr>
                            <td>170313D</td>
                            <td>Krishanthan Arunthavarajan</td>
                            <td>krisharun.17@cse.mrt.ac.lk</td>
                            <td>3/3</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
