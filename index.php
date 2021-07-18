<?php
  session_start();

  include_once('layouts/head.php');
  include_once('controller/t_meja.php');

  $mejaObj = new Meja();

  if (isset($_SESSION['user'])) {
    header('location:home.php', true, 301);
    exit();
  }
  if (isset($_GET['nomeja']) && $_GET['nomeja'] !== "") {
    $data = $mejaObj->viewMeja($_GET['nomeja']);
    if ($data->num_rows == 1) {
      $_SESSION['user'] = $_GET['nomeja'];
      $_SESSION['nomeja'] = $_GET['nomeja'];
      header('location:home.php', true, 301);
      exit();
    }
  }

?>

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
        <?php
          $meja = "";
          if (isset($_GET['meja'])) {
            $meja = $_GET['meja'];
          }
        ?>
        <a
          class="btn btn-primary btn-lg"
          data-aos="fade-zoom-in"
          data-aos-delay="1500"
          href="index.php?nomeja=<?php echo $meja ?>"
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