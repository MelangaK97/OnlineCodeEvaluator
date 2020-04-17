<?= $this->extend('Components/StudentLayout') ?>

<?= $this->section('content') ?>

    <?= $this->include('Components/Navbar') ?>

    <div class="container-fluid container-user row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>Course Title</h2>
                    <h3>Assignment Title</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title mt-3">Grade :</h5>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <label class="col-md-3" for="file-input">Grade :</label>
                                <label class="col-md-9" for="file-input">79/100</label>
                            </div>
                            <div class="row">
                                <label class="col-md-3" for="file-input">Graded by :</label>
                                <label class="col-md-9" for="file-input">Teacher 01</label>
                            </div>
                            <div class="row">
                                <label class="col-md-3" for="file-input">Graded on :</label>
                                <label class="col-md-9" for="file-input">Friday, 6 March 2020, 11:55 PM</label>
                            </div>
                            <div class="row">
                                <label class="col-md-3" for="file-input">Plagiarism report :</label>
                                <label class="col-md-9" for="file-input">Unique</label>
                            </div>
                            <div class="row">
                                <label class="col-md-3" for="file-input">Feedback :</label>
                                <label class="col-md-9" for="file-input">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur libero mollitia ut. Accusantium beatae eos modi obcaecati, sit vitae voluptatem.</label>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mt-3">Report Issue (Optional) :</h5>
                    <div class="card">
                        <div class="card-header">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="file-input">Select file to upload :</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description :</label>
                                    <textarea class="form-control" name="input" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Report</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>