<?php

session_start();

include "../../include/database_connection.php";

$admin = $_SESSION["admin"];
$user = "SELECT * From user WHERE user_type = '$admin'";
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

        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i> <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
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
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
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
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="landingpage.php">
          <i class="bi bi-question-circle"></i>
          <span>Landing Page</span>
        </a>
      </li><!-- End Landing Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
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
                    <input type="file" class="form-control" name="image" id="floatingName" placeholder="Upload Image"
                      accept="image/*">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="header" placeholder="Address" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">Slide Label</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="paragraph" placeholder="Address" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">placeholder text</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Upload</button>
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
                    <input type="file" class="form-control" name="image2" id="floatingName" placeholder="Upload Image"
                      accept="image/*">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="inspire_text" placeholder="inspiration" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">inspiration</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="announce_text" placeholder="announcement" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">announcement</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Upload</button>
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
                    <input type="file" class="form-control" id="floatingName" name="image3" placeholder="image">
                    <label for="floatingName">Image</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="heading" name="heading" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">Heading</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="about" name="about" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">About Info</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div><!-- about us homepage ends -->

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
                    <input type="file" class="form-control" id="floatingName" name="program_image" placeholder="Image"
                      accept="image/*">
                    <label for="floatingName">Image</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="program title" name="program_title"
                      id="floatingTextarea" style="height: 50px;"></textarea>
                    <label for="floatingTextarea">Program title</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="program info" name="program_info" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">program info</label>
                  </div>
                </div>

                <h5 class="card-title mx-3 mb-0 pb-0"> Modal contents</h5>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder=" coaching content" name="coaching_content"
                      id="floatingTextarea" style="height: 50px;"></textarea>
                    <label for="floatingTextarea">coaching content</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="level" name="level" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">level</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="dates" name="dates" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">dates</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="fees" name="fees" id="floatingTextarea"
                      style="height: 50px;"></textarea>
                    <label for="floatingTextarea">fees</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Upload to programs</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">SUCCESS STORIES HOMEPAGE</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">Your Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea"
                      style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Address</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingCity" placeholder="City">
                      <label for="floatingCity">City</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State">
                      <option selected>New York</option>
                      <option value="1">Oregon</option>
                      <option value="2">DC</option>
                    </select>
                    <label for="floatingSelect">State</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingZip" placeholder="Zip">
                    <label for="floatingZip">Zip</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                BOOK DOWNLOAD HOMEPAGE</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">Your Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea"
                      style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Address</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingCity" placeholder="City">
                      <label for="floatingCity">City</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State">
                      <option selected>New York</option>
                      <option value="1">Oregon</option>
                      <option value="2">DC</option>
                    </select>
                    <label for="floatingSelect">State</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingZip" placeholder="Zip">
                    <label for="floatingZip">Zip</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

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