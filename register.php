<?php include_once('layouts/head.php') ?>

        <!-- Custom Styles -->
        <link href="assets/styles/styles.css" rel="stylesheet" />
        <link href="assets/styles/register.css" rel="stylesheet" />
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Pegawai</h3></div>
                                    <div class="card-body">
                                        <form>
                                        <div class="form-floating mb-3">
                                                <input class="form-control" id="inputnama" type="nama" name="nama" placeholder="namapegawai" />
                                                <label for="inputnama">Nama Pegawai</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputusername" type="username" name="username" placeholder="username" />
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputujamkerja" type="jamkerja" name="jam_kerja" placeholder="jamkerja" />
                                                <label for="inputEmail">Jam Kerja</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputgaji" type="gaji" name="gaji" placeholder="gaji" />
                                                <label for="inputEmail">Gaji</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" name="password_1" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" name="password_2" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.php" name="register">Register</a></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Sudah Punya Akun ? Silahkan Login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <?php
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>