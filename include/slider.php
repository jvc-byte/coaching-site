<div id="valCarousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="4000"
    data-bs-wrap="true">
    <!-- carousel indicators starts -->
    <div class="carousel-indicators">
        <?php
        $slider_query = "SELECT * FROM slider ORDER BY id ASC";
        $slider_result = mysqli_query($conn, $slider_query);
        $indicator_count = mysqli_num_rows($slider_result);
        for ($i = 0; $i < $indicator_count; $i++) {
            echo '<button type="button" data-bs-target="#valCarousel" data-bs-slide-to="' . $i . '"';
            if ($i == 0) {
                echo ' class="active"';
            }
            echo ' aria-label="Slide ' . ($i + 1) . '"></button>';
        }
        ?>
    </div>
    <!-- carousel indicators ends -->
    <!-- carousel images and text starts -->
    <div class="carousel-inner ">
        <?php
        $index = 0;
        while ($row = mysqli_fetch_assoc($slider_result)) {
            echo '<div class="carousel-item';
            if ($index == 0) {
                echo ' active';
            }
            echo '">';
            echo '<img src="' . $row['image'] . '" class="d-block w-100" alt="an image">';
            echo '<div class="carousel-caption d-none d-md-block">';
            echo '<h5>' . $row['header'] . '</h5>';
            echo '<p>' . $row['paragraph'] . '</p>';
            echo '</div></div>';
            $index++;
        }
        mysqli_free_result($slider_result);
        ?>
    </div>
    <!-- carousel images and text ends -->
    <!-- carousel navigation button starts-->
    <button class="carousel-control-prev" type="button" data-bs-target="#valCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#valCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <!-- carousel navigation button ends -->
</div>
