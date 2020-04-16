<?= $this->extend('Components/AdminLayout') ?>

<?= $this->section('content') ?>

    <div class="container-fluid row mt-5">
        <div class="col-md-5 icon-add-teacher row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <img src="<?php echo base_url('OnlineCodeEvaluator/assets/images/undraw_teaching_f1cm.svg')?>" alt="add course">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="col-md-7">
            <h2 class="text-center mb-3">Add New Teacher</h2>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first-name">First Name :</label>
                        <input type="text" class="form-control" name="fname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last-name">Last Name :</label>
                        <input type="text" class="form-control" name="lname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Email Address :</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Address :</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <label for="last-name">Contact :</label>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="home">Home :</label>
                        <input type="tel" class="form-control" name="home">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="mobile">Mobile :</label>
                        <input type="tel" class="form-control" name="mobile" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary add-btn">Add</button>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3">
                        <a href="<?php echo base_url('OnlineCodeEvaluator/public/admin/teachers')?>" type="submit" class="btn btn-secondary add-btn">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?= $this->endSection() ?>