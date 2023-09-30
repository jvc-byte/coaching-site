<?php
include "database_connection.php";

// Fetch card information from the database
$card_query = "SELECT * FROM our_program_home ORDER BY id ASC LIMIT 3";
$card_result = mysqli_query($conn, $card_query);

while ($row = mysqli_fetch_assoc($card_result)) {
    echo '<div class="col-md-4 caders">';
    echo '<div class="card success_card">';
    echo '<img src="' . $row["program_image"] . '" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $row["program_title"] . '</h5>';
    echo '<p class="card-text">' . $row["program_info"] . '</p>';
    echo '</div>';
    echo '<div class="card-body">';
    echo '<a href="#" class="card-link btn btn-outline-primary cardLink" data-bs-toggle="modal"
            data-bs-target="#modal' . $row["id"] . '">Levels, Dates & Fees</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    // Dynamic modal content for each card
    echo '<div class="modal fade" id="modal' . $row["id"] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    echo '<div class="modal-dialog modal-dialog-centered">';
    echo '<div class="modal-content">';
    echo '<div class="modal-header">';
    echo '<h5 class="modal-title" id="exampleModalLabel">' . $row["program_title"] . '</h5>';
    echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
    echo '</div>';
    echo '<div class="modal-body">';
    echo '<p><b>Coaching Content:</b> ' . $row["coaching_content"] . '</p>';
    echo '<p><b>Level:</b> ' . $row["level"] . '</p>';
    echo '<p><b>Dates:</b> ' . $row["dates"] . '</p>';
    echo '<p><b>Fees:</b> ' . $row["fees"] . '</p>';
    echo '</div>';
    echo '<div class="modal-footer">';
    echo '<a href="ourProgrampage.php" class="card-link btn btn-outline-primary cardLink">Enroll</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>
