<?php include('layouts/head.php') ?>

    <!-- Custom Styles -->
    <link href="assets/styles/styles.css" rel="stylesheet"/>
    <link href="assets/styles/pengantar.css" rel="stylesheet"/>  
</head>
<body>
  <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-lg" data-aos="fade-down">
      <div class="container-fluid">
        <a class="navbar-brand"></a>
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li> 
      </ul>
      </div>
    </nav>
  <!-- Main -->
    <div id="cover">
      <div class="landing-text">
        <h1 class="cover-text fs-1">Resto Unikom</h1>
        <p class="p-text fs-4">
          Selamat Datang Pelanggan yang Terhormat <br>
          Selamat Menikmati Hidangan Kami
        </p>
        <a
          class="btn btn-primary btn-lg"
          href="home.php"
          data-aos="fade-zoom-in"
          data-aos-delay="1500"
        >
          Mulai
        </a>
      </div>
    </div>
</body>

<?php 
    include('layouts/scripts.php');
    include('layouts/end.php');
?>