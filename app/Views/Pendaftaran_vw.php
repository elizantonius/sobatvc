<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $judul ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="img/logo.jpg" alt="bootstrap 4 login page">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Pendaftaran</h4>
                            <form action="<?= base_url('Pendaftaran/adddata') ?>" method="POST">
                                <div class="form-group">
                                    <label for="name">Name Pemilik Usaha</label>
                                    <input type="text" class="form-control" name="namown" required autofocus>
                                    <div class="invalid-feedback">
                                        What's your name?
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">NO. KTP</label>
                                    <input type="text" class="form-control" name="ktp" required>
                                    <div class="invalid-feedback">
                                        Your email is invalid
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Alamat Usaha</label>
                                    <input type="text" class="form-control" name="alamat">
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">No Hp</label>
                                    <input type="text" class="form-control" name="nohp">
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>



                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Daftar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; 2017 &mdash; Sobat VC
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/my-login.js"></script>
</body>

</html>