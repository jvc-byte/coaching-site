<?php
include "database_connection.php";

// Fetch card information from the database
$card_query = "SELECT * FROM book_advert ORDER BY id DESC LIMIT 1";
$card_result = mysqli_query($conn, $card_query);

while ($row = mysqli_fetch_assoc($card_result)) {
    echo '<div class="row g-0">';
    echo '<div class="col-md-4">';
    echo '<img src="' . $row["book_image"] . '" class="img-fluid rounded-start" alt="...">';
    echo '</div>';
    echo '<div class="col-md-8 BookAnimate">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $row["book_text"] . '</h5>';
    echo '<p class="card-text BookCardText">' . $row["book_intro"] . '</p>';
    //<!-- Button trigger modal -->
    echo '<button type="button" class="btn btn-primary detail" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">DOWNLOAD NOW!
            </button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';


    // <!-- Modal for book advert starts -->
    echo '<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">';
    echo '<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">';
    echo '<div class="modal-content BookModal">';
    echo '<div class="modal-header">';
    echo '<h5 class="modal-title fs-5" id="staticBackdropLabel">' . $row["modal_header"] . '</h5>';
    echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
    echo '</div>';
    echo '<div class="modal-body">';

    echo '<div class="card mb-3 border-0 BookModalCard">';
    echo '<div class="row g-0">';
    echo '<div class="col-md-4">';
    echo '<img src="' . $row["book2_image"] . '" class="img-fluid rounded-start" alt="...">';
    echo '</div>';
    echo '<div class="col-md-8">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" id="ModalBookTitle">' . $row["book_title"] . '</h5>';
    echo '<p class="card-text">' . $row["book_description"] . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<h6 class="card-title">' . $row["book_sumary"] . '</h6>';
    echo '<p>' . $row["sumary_content"] . '</p>';
    echo '</div>';
    echo '<div class="modal-footer">';
    echo '<button type="button" class="btn btn-secondary BookModalBtn" data-bs-dismiss="modal">Close</button>';
    echo '<button type="button" class="btn btn-primary BookModalBtn BookModalBtnDnld"><a class="BookModalBtn"
                        href="image/book image 2.png" DOWNLOAD>Download</a></button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    // <!-- Modal for book advert ends -->
}
?>