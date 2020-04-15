<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('OnlineCodeEvaluator/assets/admin/CSS/style.css'); ?>">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>

        <title>Teachers</title>
    </head>
    <body>

        <div class="jumbotron jumbotron-fluid admin-jumbotron">
            <div class="layer"></div>
        </div>
        <div class="container-fluid row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Teachers</a>
                    <a href="#" class="list-group-item list-group-item-action">Courses</a>
                    <a href="#" class="list-group-item list-group-item-action">Logout</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body card-body-head">
                        <h5 class="card-title text-center">Teachers</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary"><i class="fas fa-plus"></i> Add Teacher</button>
                        <table class="table table-sm table-hover mt-2">
                            <thead>
                            <tr>
                                <th scope="col">ID Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">View</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>Larry the Bird</td>
                                <td>Thornton</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
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