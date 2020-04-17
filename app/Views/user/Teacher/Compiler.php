<?= $this->extend('Components/TeacherLayout') ?>

<?= $this->section('content') ?>

<?= $this->include('Components/TeacherNavbar') ?>

<div class="container-fluid container-user row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h3>Compiler</h3>
            </div>
            <div class="card-body">
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
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
