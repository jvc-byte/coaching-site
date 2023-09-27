<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="image/logo.jpg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/13d098a0cf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
  <link rel="stylesheet" href="bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    crossorigin="anonymous" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC%+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>
  <!-- our program page starts -->
  <article>
    <div class="container">
      <div class="row">
        <header>
          <h1 class="text-center coachprograms py-5">Welcome to Our Coaching Programs</h1>
          <a href="index.php"><button class="btn btn-outline-primary text-start homefromourprogpage">Home</button></a>
        </header>
        <?php include_once "include/ourProgramPageCard.php" ?>
        <footer class="mt-5">
          <div class="container">
            <div class="row">
              <div class="col text-center">No matter which program you've chosen, remember that your commitment and active
                participation are key to achieving business growth. Regularly revisit this dashboard for
                program-specific updates and resources to support your journey.
                <p class="text-center">Best of luck with your business growth endeavors!</p>
              </div>
            </div>
          </div>
          <p class="text-center">Contact us for more information: contact@example.com</p>
        </footer>
      </div>
    </div>
  </article>
  <!-- our program page ends -->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>