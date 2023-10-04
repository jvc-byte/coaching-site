<?php
include "database_connection.php";

// Fetch card information from the database
$card_query = "SELECT * FROM blog_page ORDER BY id DESC";
$card_result = mysqli_query($conn, $card_query);

while ($row = mysqli_fetch_assoc($card_result)) {
    echo '<div class="col col-sm-4 col-lg-3 col-xl-2">';
    echo '<div class="card h-100">';
    echo '<img src="' . $row["blog_image"] . '" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $row["blog_title"] . '</h5>';
    echo '<p class="card-text">' . $row["blog_info"] . '</p>';
    echo '</div>';
    echo '<div class="card-footer">';
    echo '<small class="text-body-secondary">Last updated ' . $row["date"] . '</small>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

}
?>