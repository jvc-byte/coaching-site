<?php
include "database_connection.php";

// Fetch card information from the database
$card_query = "SELECT * FROM success_card ORDER BY id DESC LIMIT 4";
$card_result = mysqli_query($conn, $card_query);

while ($row = mysqli_fetch_assoc($card_result)) {
    echo '<div class="col-md-3 caders">';
    echo '<div class="card success_card">';
    echo '<img src="' . $row["success_image"] . '" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $row["head_text"] . '</h5>';
    echo '<p class="card-text">' . $row["success_insight"] . '</p>';
    echo '<footer class="blockquote-footer">' . $row["success_name"] . '<cite title="Source Title">' . $row["success_cite"] . '</cite>';
    echo '</footer>';
    echo '</div>';
    echo '<div class="card-body">';
    echo '<a href="ourProgrampage.php" class="card-link btn btn-outline-primary  cardLink">Join the journey</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

}
?>