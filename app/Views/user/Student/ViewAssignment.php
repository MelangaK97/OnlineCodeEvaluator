<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('OnlineCodeEvaluator/assets/user/CSS/style.css'); ?>">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <title>View Assignment</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-primary">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Assignments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Grades</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Student Name
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

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
                        <button class="btn btn-primary btn-grade align-middle" type="submit" disabled>View Grade</button>
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
                                    <div class="from-group">
                                        <label>Give Custom Inputs :</label>
                                        <textarea class="form-control" name="input"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-secondary" type="submit">Run Code</button>
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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>