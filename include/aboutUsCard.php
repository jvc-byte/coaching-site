<?php
include "database_connection.php";

$user = "SELECT * FROM about_us_card ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $user);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>

<div class="card cader mb-3" style="max-width: 1200px;">
    <div class="row g-0">
        <div class="col-md-2 the-coach-image">
            <img src="<?php echo $row["image"]; ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-10 the-coach">
            <div class="card-body">
                <h5 class="card-title" id="MeetTheCoach"><?php echo $row["heading"]; ?></h5>
                <p class="card-text"><?php echo $row["about"]; ?></p>
                <a href="#" id="aboutusmoredetailbtn" class="btn btn-outline-primary detail">More
                    Details</a>
                </p>
            </div>
        </div>
    </div>
</div>