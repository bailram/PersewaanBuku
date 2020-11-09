<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Boorent</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
  <?php include 'model.php'; ?>
</head>

<body>
  <?php if (isset($_GET['m'])) {
    $message = $_GET['m'];
    if ($message==1) {
      echo '<script type="text/javascript">alert("Succes to rent books!");</script>';
    } elseif ($message==2) {
      echo '<script type="text/javascript">alert("Invoice number has been taken!");</script>';
    } else {
      echo '<script type="text/javascript">alert("Failed to rent books!");</script>';
    }
  } ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ml-5 mr-5" href="#" style="font-family: 'Pacifico', cursive;">Boorent</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="#menu-features">Features</a>
        <a class="nav-item nav-link" href="#menu-showcase">Showcase</a>
        <a class="nav-item nav-link" href="#menu-testimonials">Testimonials</a>
        <a class="nav-item nav-link" href="#menu-rent">Rent</a>
        <a class="nav-item nav-link" href="#menu-contact">Contact</a>
      </div>
    </div>
    <a class="btn btn-primary mr-5" href="dashboard.php">Admin</a>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">One book is not enough to make you feel the world.</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center" id="menu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-emotsmile m-auto text-primary"></i>
            </div>
            <h3>Fully Responsive</h3>
            <p class="lead mb-0">This website will look great on any device, no matter the size!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-list m-auto text-primary"></i>
            </div>
            <h3>Complete book list</h3>
            <p class="lead mb-0">Displays the latest books from the Bookrent book list!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Go to rent, choose the book, and just slap the rent button!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase" id="menu-showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>The latest edition of the book</h2>
          <p class="lead mb-0">Get the latest editions of books in the field you are looking for. Enjoy the latest editions of books in their field!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Best of the best prints</h2>
          <p class="lead mb-0">Preserved prints, cared for by experts, Boorent puts the reader first in enjoying the reading experience! all books are protected by Boorent!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Books cover all areas</h2>
          <p class="lead mb-0">Get all the information in any field with guaranteed reliable information and the best edition in its field. Get serials in entertainment too!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light" id="menu-testimonials">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"The books provided are complete and in excellent print!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Input Form New Sewa -->
  <section class="sewa col-9 mt-4 mb-5" style="margin: 0px auto;" id="menu-rent">
    <div class="container">
      <center><h2 class="mb-5">Rental the book now!</h2></center>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Rental</h6>
        </div>
        <div class="card-body">
          <form action="addsewa.php" method="post">
            <div class="form-group">
              <label for="exampleFormControlInput1">Invoice Number</label>
              <input type="text" class="form-control" id="nomorfaktur" name="nomorfaktur" placeholder="Nomor Faktur" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Invoice Date</label>
              <input type="date" class="form-control" id="tanggalfaktur" name="tanggalfaktur" placeholder="Tanggal Faktur" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Cunsomer Name</label>
              <input type="text" class="form-control" id="namakonsumen" name="namakonsumen" placeholder="Nama Konsumen" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Book</label>
              <select class="form-control" id="kodebuku" name="kodebuku">
                <?php
                $res = show_kodebuku_and_judul();
                if ($res->num_rows > 0) {
                  foreach ($res as $row) {
                ?>
                  <option value="<?=$row['kodebuku']?>"><?=$row['judulbuku']?></option>
                <?php
                  }
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Quantity</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah" max="99999" placeholder="Jumlah" required>
            </div>
            <button type="submit" class="btn btn-primary">Rent</button>
            </form>
        </div>
    </div>
    </div>
  </section>

  <!-- Contact Us -->
  <section class="call-to-action text-white text-center" id="menu-contact">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12 mx-auto">
          <h2 class="mb-4">Contact Us</h2>
        </div>
        <div class="col-lg-6">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <span class="badge badge-light" style="margin: 0px auto;">
                <i class="icon-envelope-letter m-auto text-primary bg-light"></i>
              </span>
            </div>
            <p class="mb-0">Email</p>
            dhimasbayu.9f@gmail.com
          </div>
      </div>
      <div class="col-lg-6">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <span class="badge badge-light" style="margin: 0px auto;">
              <i class="icon-phone m-auto text-primary bg-light"></i>
            </span>
          </div>
          <p class="mb-0">Phone</p>
          +62 893-3494-5635
        </div>
    </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#menu-features">Features</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#menu-showcase">Showcase</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#menu-testimonials">Testimonials</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#menu-rent">Rent</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#menu-contact">Contact</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Dhimas Bayu Ilham Ramadhan 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
