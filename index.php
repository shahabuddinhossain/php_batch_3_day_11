<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a href="" class="navbar-brand">LOGO</a>
                <ul class="navbar-nav">
                    <li><a href="" class="nav-link">Example One</a></li>
                    <li><a href="" class="nav-link">Example Two</a></li>
                </ul>
            </div>

        </nav>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Please Fill-Up</div>
                        <div class="card-body">
                            <form action="action.php" method="POST" >
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="first_name" id="" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="last_name" id="" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo isset($result)? $result : '';?>" id="" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" id="" class="btn btn-outline-success" value="submit"/>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>