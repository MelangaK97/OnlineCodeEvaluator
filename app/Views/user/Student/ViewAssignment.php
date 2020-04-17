<?= $this->extend('Components/StudentLayout') ?>

<?= $this->section('content') ?>

    <?= $this->include('Components/Navbar') ?>

    <div class="container-fluid container-user row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h2>Course Title</h2>
                            <h3>Assignment Title</h3>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo base_url('OnlineCodeEvaluator/public/Home/viewGrade') ?>" class="btn btn-primary btn-grade align-middle" type="submit" disabled>View Grade</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Description :</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab, amet assumenda cum debitis dicta dolores ducimus eius eligendi expedita fugiat id inventore ipsam laborum libero, magnam necessitatibus obcaecati officiis omnis qui quia, reprehenderit repudiandae sit sunt veniam veritatis voluptate. Aspernatur deleniti enim error labore odit quibusdam quos sit ullam!</p>
                    <h5 class="card-title">Resources :</h5>
                    <p>Resource files list</p>
                    <h5 class="card-title">Run Code (Optional) :</h5>
                    <div class="card">
                        <div class="card-header">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="file-input">Select file to upload :</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Choose the Language :</label>
                                            <select name = "lang" class="custom-select" required>
                                                <option value="Python">Python</option>
                                                <option value="Java">Java</option>
                                                <option value="Cpp">C++</option>
                                                <option value="Php">PHP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Give Custom Inputs :</label>
                                            <textarea class="form-control" name="input"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-secondary" type="submit">Run Code</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h5 class="card-title mt-3">Submit Assignment :</h5>
                    <div class="card">
                        <div class="card-header">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <label class="col-md-3" for="file-input">Submission Status :</label>
                                    <label class="col-md-9" for="file-input">Submitted for grading</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-3" for="file-input">Grading Status :</label>
                                    <label class="col-md-9" for="file-input">Not graded</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-3" for="file-input">Due Date :</label>
                                    <label class="col-md-9" for="file-input">Friday, 6 March 2020, 11:55 PM</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-3" for="file-input">Last Modified :</label>
                                    <label class="col-md-9" for="file-input">Friday, 6 March 2020, 9:13 PM</label>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="file-input">Select file to upload :</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Choose the Language :</label>
                                            <select name = "lang" class="custom-select" required>
                                                <option value="Python">Python</option>
                                                <option value="Java">Java</option>
                                                <option value="Cpp">C++</option>
                                                <option value="Php">PHP</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit Assignment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>