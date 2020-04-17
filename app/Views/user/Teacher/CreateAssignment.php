<?= $this->extend('Components/TeacherLayout') ?>

<?= $this->section('content') ?>

    <?= $this->include('Components/TeacherNavbar') ?>

    <div class="container-fluid container-user row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Create Assignment</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input class="form-control" type="text" name="title" id="title" placeholder="Add Title Here..." required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Documents:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="documents[]" id="documents" multiple="multiple">
                                    <label class="custom-file-label" for="customFile">Choose files</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="deadline">Deadline:</label>
                                    <input type="date" class="form-control" name="deadline" id="deadline" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Add Description Here..."></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="languages[]">Languages:</label>
                            </div>
                            <div class="form-inline col-md-8 row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="Cpp">
                                        <label class="form-check-label" for="Cpp">
                                            C++
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="Java">
                                        <label class="form-check-label" for="Java">
                                            Java
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="Php">
                                        <label class="form-check-label" for="Php">
                                            PHP
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input mr-2" type="checkbox" name="languages[]" value="Python">
                                        <label class="form-check-label" for="Python">
                                            Python
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="compiler">Give access to compiler:</label>
                            </div>
                            <div class="form-inline col-md-8 row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" name="compiler" value="Yes">
                                        <label class="form-check-label ml-3" for="Yes">
                                            Yes
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" name="compiler" value="No" checked>
                                        <label class="form-check-label ml-3" for="No">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <button class="btn btn-primary" type="submit" name="create">Create Assignment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
