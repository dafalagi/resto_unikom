    <?php
        session_start();

        include_once('layouts/head.php');
        include_once('controller/t_pegawai.php');

        $pegawaiObj = new Pegawai();

        if (isset($_SESSION['user'])) {
            header('location:home.php', true, 301);
            exit();
        }
        if (isset($_POST['login'])) {
            $pegawaiObj->loginPegawai($_POST);
        }
    ?>
    
    <!-- Custom Styles -->
        <link href="assets/styles/styles.css" rel="stylesheet" />
        <link href="assets/styles/login.css" rel="stylesheet" />
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputusername" type="username" name="username" placeholder="Username" />
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-primary" href="index.php"><--  Halaman Pengantar</a>
                                                <button type="submit" class="btn btn-primary" name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Belum Punya Akun? Silahkan Register</a></div>
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
