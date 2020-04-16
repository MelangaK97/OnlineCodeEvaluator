<?= $this->extend('Components/AdminLayout') ?>

<?= $this->section('content') ?>

    <div class="container-fluid row mt-5">
        <div class="col-md-5 icon-add-course row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/undraw_add_file2_gvbb.svg')?>" alt="add course">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="col-md-7">
            <h2 class="text-center mb-3">Add New Course</h2>
            <form>
                <div class="form-group">
                    <label for="id">Course ID :</label>
                    <input type="text" class="form-control" name="id" required>
                </div>
                <div class="form-group">
                    <label for="title">Title :</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="title">Select Teacher :</label>
                        <select class="custom-select">
                            <option selected disabled>Select from here...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary add-btn">Add</button>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3">
                        <a href="<?php echo base_url('OnlineCodeEvaluator/public/admin/courses')?>" type="submit" class="btn btn-secondary add-btn">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?= $this->endSection() ?>