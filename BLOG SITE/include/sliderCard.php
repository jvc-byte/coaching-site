<div class="card carde main-card" style="width: 100%;">
    <div class="btn-toolbar justify-content-evenly" role="toolbar" aria-label="Toolbar with button groups">
        <button id="btn1" class="btn btn-outline-primary inspirebtn" type="submit" data-bs-toggle="inspiration"
            data-bs-target="#inspiration" aria-expanded="false" aria-controls="inspiration">INSPIRATION</button>
        <button id="btn2" class="btn btn-outline-primary text-end ms-lg-5 anouncebtn" data-bs-toggle="anounce"
            data-bs-target="#anouncement" aria-expanded="false" aria-controls="anouncement"
            type="submit">ANNOUNCEMENT</button>
    </div>

    <div class="inspire" id="inspiration">
        <?php
        $slider_card_query = "SELECT * FROM slider_card ORDER BY id DESC LIMIT 4";
        $result = mysqli_query($conn, $slider_card_query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card carde card-body">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-2"><img src="' . $row["image"] . '" alt="" width="40" height="40" class="image-fluid"></div>';
            echo '<div class="col-10">';
            echo '<h6>' . $row["inspire_text"] . '</h6>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

    <div class="anounce" id="anouncement">
        <?php
        // Reset the pointer back to the beginning of the results
        mysqli_data_seek($result, 0);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card carde card-body">';
            echo $row["announce_text"];
            echo '</div>';
        }
        ?>
    </div>

    <div class="card-body socials">
        <a href="#" class="card-link"><i class="fab fa-blogger-b"></i></a>
        <a href="#" class="card-link"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="card-link"><i class="fa-brands fa-youtube"></i></a>
        <a href="#" class="card-link"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="card-link"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#" class="card-link"><i class="fa fa-envelope-O"></i></a>
    </div>
</div>
