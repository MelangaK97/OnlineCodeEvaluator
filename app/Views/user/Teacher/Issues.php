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
                        <h3>Assignment Name</h3>
                        <h4>Issues</h4>
                    </div>
                    <div class="col-md-2" id="banner">
                        <a href="<?php echo base_url('OnlineCodeEvaluator/public/Teacher/Issues') ?>" class="btn btn-primary btn-grade align-middle" type="submit" id="view-grade">View Issues</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="">Number of Issues :</label>
                            </div>
                            <div class="col-md-7">
                                <label for="">12</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col" style="width: 110px">Student ID</th>
                            <th scope="col">Description</th>
                            <th scope="col">Attached Files</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>170298H</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ducimus expedita in natus necessitatibus nesciunt nulla quo sed sequi sit! Amet corporis fugiat nisi praesentium quaerat quibusdam rem repellendus tempore!</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
                            <td><a class="ml-3" href="">Fix</a></td>
                        </tr>
                        <tr>
                            <td>170307M</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut culpa, deserunt est excepturi necessitatibus neque nihil possimus quaerat reprehenderit, suscipit voluptate?</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing.</td>
                            <td><a class="ml-3" href="">Fix</a></td>
                        </tr>
                        <tr>
                            <td>170311U</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat in ipsa laboriosam maiores optio perferendis repudiandae!</td>
                            <td></td>
                            <td><a class="ml-3" href="">Fix</a></td>
                        </tr>
                        <tr>
                            <td>170313D</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi aut cupiditate ducimus error magnam molestias, nihil quae rem saepe sint sit temporibus vel voluptatem?</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td><a class="ml-3" href="">Fix</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
