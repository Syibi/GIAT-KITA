<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="asset/internal/img/img-local/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/internal/css/sb-admin-2.css" rel="stylesheet" />
</head>
<body class="body bg-primary">

    <div class="container bg-primary">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!!</h1>
                                        <h6 class="h6 text-gray-90 mb-2">Silahkan masuk dan mulailah menabung</h6>
                                    </div>
                                    <form method="post" action="cek_login.php" class="user">
                                        <div class="form-group ">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="masukkan username anda..." name="user">
                                            </input>
                                        </div>
                                        <div class="form-group ">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="masukkan password" name="pass">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat saya</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="login" value="Masuk" class="btn btn-primary btn-user btn-block shadow-sm">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Lupa Password?</a>
                                        <hr>
                                        <h6 class="h6 text-gray-50 mb-2">Belum punya akun? yuk daftar disini!!</h6>
                                        <a href="register.html" class="small">Buat Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>