<?php

session_start();

require_once "database_connection.php";

if (!isset($_SESSION["admin_id"])) {
  header("location: ../../index.php");
}

$user_id = $_SESSION["admin_id"];
$user = "SELECT * From user WHERE id = '$user_id'";
$result = mysqli_query($conn, $user);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,
  600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,
  400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt=""> <span class="d-none d-lg-block">Logo</span>
      </a> <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">

      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle" href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End mobile Search Icon -->

        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i> <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">

            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li> <!--End notification header> -->

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->
        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo (empty($row["profile_picture"]) ? '../../image/profile_icon.jpg' : $row["profile_picture"]); ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">
              <?php echo $row["first_name"]; ?>
            </span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li class="dropdown-header">
              <h6>
                <?php echo $row["first_name"];
                echo " ";
                echo $row["last_name"]; ?>
              </h6>
              <span>
                <?php echo $row["email"]; ?>
              </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="landingpage.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->

        </li><!-- End Profile Nav -->

      </ul>

    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="landingpage.php">
          <i class="bi bi-layout-text-sidebar-reverse"></i>
          <span>Landing Page</span>
        </a>
      </li><!-- End Landing Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="users_dashboard.php">
          <i class="bi bi-envelope"></i>
          <span>Users Dashboard</span>
        </a>
      </li><!-- End Users Dashboard Page Nav -->
    </ul><!-- End sidebar navs -->
  </aside><!-- End Sidebar-->

  <!-- ======= Main contents ======= -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Landing Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Edit Landing Page</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">SLIDER HOMEPAGE</h5>

              <!-- Slider Labels Form -->
              <form action="sliderproccess.php" method="post" enctype="multipart/form-data" class="row g-3">
                <?php
                // Check if the insert_success message is set in the session
                if (isset($_SESSION["insert_success"])) {
                  echo $_SESSION["insert_success"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["insert_success"]);
                }

                // Check if the required_field message is set in the session
                if (isset($_SESSION["required_field"])) {
                  echo $_SESSION["required_field"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["required_field"]);
                }

                // Check if the insert_fail message is set in the session
                if (isset($_SESSION["insert_fail"])) {
                  echo $_SESSION["insert_fail"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["insert_fail"]);
                }

                // Check if the proccess_terminate message is set in the session
                if (isset($_SESSION["proccess_terminate"])) {
                  echo $_SESSION["proccess_terminate"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["proccess_terminate"]);
                }

                // Check if the proccess_fail message is set in the session
                if (isset($_SESSION["proccess_fail"])) {
                  echo $_SESSION["proccess_fail"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["proccess_fail"]);
                }
                ?>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="file" class="form-control" name="image" id="image" placeholder="Slider Image"
                      accept="image/*">
                    <label for="image">Slider Image</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="header" placeholder="Address" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">Slider Label</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="paragraph" placeholder="Address" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">Placeholder text</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Update slider</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End slider Form -->

            </div>
          </div><!-- slider hompage ends -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title w-100">ANOUNCEMENT AND INSPIRATION HOMEPAGE</h5>

              <!-- CARD BESIDE SLIDER homepage -->
              <form action="sliderCardproccess.php" method="post" enctype="multipart/form-data" class="row g-3">
                <?php
                // Check if the empty_field message is set in the session
                if (isset($_SESSION["empty_field"])) {
                  echo $_SESSION["empty_field"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["empty_field"]);
                }

                // Check if the insert_ok message is set in the session
                if (isset($_SESSION["insert_ok"])) {
                  echo $_SESSION["insert_ok"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["insert_ok"]);
                }

                // Check if the insert_bad message is set in the session
                if (isset($_SESSION["insert_bad"])) {
                  echo $_SESSION["insert_bad"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["insert_bad"]);
                }

                // Check if the proccess_bad message is set in the session
                if (isset($_SESSION["proccess_bad"])) {
                  echo $_SESSION["proccess_bad"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["proccess_bad"]);
                }

                // Check if the proccess_cancel message is set in the session
                if (isset($_SESSION["proccess_cancel"])) {
                  echo $_SESSION["proccess_cancel"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["proccess_cancel"]);
                }
                ?>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="file" class="form-control" name="image2" id="image2" placeholder="Inspiration Image"
                      accept="image/*">
                    <label for="image2">Inspire Image</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="inspire_text" placeholder="inspiration" id="inspire_text"
                      style="height: 50px;"></textarea>
                    <label for="inspire_text">Inspiration</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="announce_text" placeholder="announcement" id="announce_text"
                      style="height: 50px;"></textarea>
                    <label for="announce_text">Announcement</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Update Ann. & Insp.</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End CARD BESIDE SLIDER -->

            </div>
          </div><!-- anouncement and inspiration homepage ends -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">ABOUT US HOMEPAGE</h5>

              <!-- Floating Labels Form -->
              <form action="about_us_proccess.php" method="post" enctype="multipart/form-data" class="row g-3">
                <?php
                // Check if the nothing message is set in the session
                if (isset($_SESSION["nothing"])) {
                  echo $_SESSION["nothing"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["nothing"]);
                }

                // Check if the correct message is set in the session
                if (isset($_SESSION["correct"])) {
                  echo $_SESSION["correct"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["correct"]);
                }

                // Check if the wrong message is set in the session
                if (isset($_SESSION["wrong"])) {
                  echo $_SESSION["wrong"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["wrong"]);
                }

                // Check if the error message is set in the session
                if (isset($_SESSION["error"])) {
                  echo $_SESSION["error"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["error"]);
                }

                // Check if the terminate message is set in the session
                if (isset($_SESSION["terminate"])) {
                  echo $_SESSION["terminate"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["terminate"]);
                }
                ?>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="file" class="form-control" id="image3" name="image3" placeholder="About Image">
                    <label for="image3">About Image</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="heading" name="heading" id="heading"
                      style="height: 50px;"></textarea>
                    <label for="heading">Heading</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="about" name="about" id="about"
                      style="height: 50px;"></textarea>
                    <label for="about">About Info</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Update about us</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div><!-- about us homepage ends -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">BOOK DOWNLOAD HOMEPAGE</h5>

              <!-- Floating Labels Form -->
              <form action="book_advert_proccess.php" method="post" enctype="multipart/form-data" class="row g-3">
              <?php
                // Check if the val message is set in the session
                if (isset($_SESSION["val"])) {
                  echo $_SESSION["val"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["val"]);
                }

                // Check if the lav message is set in the session
                if (isset($_SESSION["lav"])) {
                  echo $_SESSION["lav"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["lav"]);
                }

                // Check if the avl message is set in the session
                if (isset($_SESSION["avl"])) {
                  echo $_SESSION["avl"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["avl"]);
                }

                // Check if the vla message is set in the session
                if (isset($_SESSION["vla"])) {
                  echo $_SESSION["vla"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["vla"]);
                }

                // Check if the alv message is set in the session
                if (isset($_SESSION["alv"])) {
                  echo $_SESSION["alv"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["alv"]);
                }
                ?>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="file" class="form-control" name="book_image" id="book_image" placeholder="book image" accept="image/*" >
                    <label for="book_image">Book Image</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="book text" name="book_text" id="book_text"
                      style="height: 50px;"></textarea>
                    <label for="book_text">Book Text</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="book intro" name="book_intro" id="book_intro"
                      style="height: 50px;"></textarea>
                    <label for="book_intro">Book Intro</label>
                  </div>
                </div>

                <h5 class="card-title mx-3 pb-0 mb-0">Book download modal</h5>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="file" class="form-control" name="book2_image" id="book2_image" placeholder="modal header" accept="image/*" >
                    <label for="book2_image">Book Image</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="modal header" name="modal_header" id="modal_header"
                      style="height: 50px;"></textarea>
                    <label for="modal_header">Modal Header</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="book title" name="book_title" id="book_title"
                      style="height: 50px;"></textarea>
                    <label for="book_title">Book Title</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="book description" name="book_description" id="book_description"
                      style="height: 50px;"></textarea>
                    <label for="book_description">Book Description</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="book sumary" name="book_sumary" id="book_sumary"
                      style="height: 50px;"></textarea>
                    <label for="book_sumary">Book Sumary</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="sumary content" name="sumary_content" id="sumary_content"
                      style="height: 50px;"></textarea>
                    <label for="sumary_content">Sumary Content</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Update book advert</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div><!-- book advert ends -->

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">OUR PROGRAM HOMEPAGE</h5>
              <!-- Floating Labels Form -->
              <form action="program_proccess.php" method="post" enctype="multipart/form-data" class="row g-3">
                <?php
                // Check if the empty message is set in the session
                if (isset($_SESSION["empty"])) {
                  echo $_SESSION["empty"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["empty"]);
                }

                // Check if the ok message is set in the session
                if (isset($_SESSION["ok"])) {
                  echo $_SESSION["ok"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["ok"]);
                }

                // Check if the not_ok message is set in the session
                if (isset($_SESSION["not_ok"])) {
                  echo $_SESSION["not_ok"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["not_ok"]);
                }

                // Check if the bad message is set in the session
                if (isset($_SESSION["bad"])) {
                  echo $_SESSION["bad"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["bad"]);
                }

                // Check if the terminated message is set in the session
                if (isset($_SESSION["terminated"])) {
                  echo $_SESSION["terminated"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["terminated"]);
                }
                ?>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="file" class="form-control" id="program_image" name="program_image" placeholder="Image"
                      accept="image/*">
                    <label for="program_image">Program Image</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="program title" name="program_title" id="program_title"
                      style="height: 50px;"></textarea>
                    <label for="program_title">Program title</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="program info" name="program_info" id="program_info"
                      style="height: 50px;"></textarea>
                    <label for="program_info">Program info</label>
                  </div>
                </div>

                <h5 class="card-title mx-3 mb-0 pb-0"> Modal contents</h5>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder=" coaching content" name="coaching_content"
                      id="coaching_content" style="height: 50px;"></textarea>
                    <label for="coaching_content">Coaching content</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="level" name="level" id="level"
                      style="height: 50px;"></textarea>
                    <label for="level">Level</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="dates" name="dates" id="dates"
                      style="height: 50px;"></textarea>
                    <label for="dates">Dates</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="fees" name="fees" id="fees"
                      style="height: 50px;"></textarea>
                    <label for="fees">Fees</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Update our programs</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
            </div>
          </div><!-- our program homepage ends -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">SUCCESS STORIES HOMEPAGE</h5>

              <form action="success_proccess.php" method="post" class="row g-3" enctype="multipart/form-data">
                <?php
                // Check if the null message is set in the session
                if (isset($_SESSION["null"])) {
                  echo $_SESSION["null"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["null"]);
                }

                // Check if the a message is set in the session
                if (isset($_SESSION["a"])) {
                  echo $_SESSION["a"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["a"]);
                }

                // Check if the b message is set in the session
                if (isset($_SESSION["b"])) {
                  echo $_SESSION["b"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["b"]);
                }

                // Check if the c message is set in the session
                if (isset($_SESSION["c"])) {
                  echo $_SESSION["c"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["c"]);
                }

                // Check if the d message is set in the session
                if (isset($_SESSION["d"])) {
                  echo $_SESSION["d"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["d"]);
                }
                ?>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="file" class="form-control" name="success_image" id="success_image"
                      placeholder="success image" accept="image/*">
                    <label for="success_image">Success image</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="head_text" placeholder="head text" id="head_text"
                      style="height: 50px;"></textarea>
                    <label for="head_text">Card title text</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="success_insight" placeholder="Card insight"
                      id="success_insight" style="height: 50px;"></textarea>
                    <label for="success_insight">Card insight</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="success_name" id="success_name"
                      placeholder="Citers' Name">
                    <label for="success_name">Citers' Name</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="success_cite" placeholder="success cite" id="success_cite"
                      style="height: 50px;"></textarea>
                    <label for="success_cite">Success cite</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Update success stories</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- success story homepage ends -->

            </div>
          </div><!-- success story ends -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">BLOG PAGE</h5>
              <!-- Floating Labels Form -->
              <form action="blog_page_proccess.php" method="post" enctype="multipart/form-data" class="row g-3">
              <?php
                // Check if the no_field message is set in the session
                if (isset($_SESSION["no_field"])) {
                  echo $_SESSION["no_field"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["no_field"]);
                }

                // Check if the yes_success message is set in the session
                if (isset($_SESSION["yes_success"])) {
                  echo $_SESSION["yes_success"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["yes_success"]);
                }

                // Check if the yes_fail message is set in the session
                if (isset($_SESSION["yes_fail"])) {
                  echo $_SESSION["yes_fail"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["yes_fail"]);
                }

                // Check if the no_proccess message is set in the session
                if (isset($_SESSION["no_proccess"])) {
                  echo $_SESSION["no_proccess"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["no_proccess"]);
                }

                // Check if the yes_terminate message is set in the session
                if (isset($_SESSION["yes_terminate"])) {
                  echo $_SESSION["yes_terminate"];
                  // Unset the session variable to clear the message
                  unset($_SESSION["yes_terminate"]);
                }
                ?>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="file" class="form-control" name="blog_image" id="blog_image" placeholder="blog image" accept="image/*">
                    <label for="blog_image">Blog Image</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="blog title" name="blog_title" id="blog_title"
                      style="height: 50px;"></textarea>
                    <label for="blog_title">Blog Title</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="blog info" name="blog_info" id="blog_info"
                      style="height: 50px;"></textarea>
                    <label for="blog_info">Blog Info</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Update blog page</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
            </div>
          </div><!-- blog page ends -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>valentine</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="#">valentine</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>