<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="joshua co">
    <title>Joshua co</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="" style="min-height: 1000px">

            <main class="col-md-6 mx-auto col-lg-6 px-md-4 text-center">
                <!-- Rest of your HTML content -->
                <h2>Login</h2>
                <div class="table-responsive">
                    <div class="mx-auto container">
                        <form id="login-form" enctype="multipart/form-data" method="POST" action="login_access.php">
                            <p style="color: red;"><?php if (isset($_GET['error'])) {echo $_GET['error'];}?></p>
                            <div class="form-group mt-2">
                                <label>Email</label>
                                <input type="email" class="form-control" id="product-name" name="admin_email"
                                    placeholder="Email" required />
                            </div>
                            <div class="form-group mt-2">
                                <label>Password</label>
                                <input type="password" class="form-control" id="product-desc" name="admin_password"
                                    placeholder="Password" required />
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-primary" name="login_btn" value="Login" />
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
