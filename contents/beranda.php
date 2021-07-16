 <?php include_once('layouts/head.php') ?>   
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/beranda.css">
</head>
    <body class="sb-nav-fixed">
        
        <?php 
            include_once('components/navbar.php');
            include_once('components/sidenav.php');
        ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      
                        <?php include_once('components/breadcrumb.php') ?>

                        <!-- Main -->
                    <div id="main">
                        <div id="mainText">
                            <div class="landing-text">
                            <h1 class="cover-text fs-1">Selamat Datang di Restoran UNIKOM</h1>
                                <p class="fs-4">
                                Silahkan Pilih Menu yang Tersedia
                                </p>
                            </div>
                        </div>
                    </div>  
                    </div>
                </main>
            </div>
        </div>

        <?php 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>