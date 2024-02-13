<?php 
$title = 'Available Cats';
include 'header.php'; ?>

<!-- About body container -->
<div class="body-container">

<!-- Banner image -->
            <div class="about-banner-container">
                <img src="images/catablebanner.jpg" alt="banner" draggable="false">
            </div>

<!-- About body text -->
<div class="article">
                <h1> Available cats</h1>
                    <br><p>Welcome to our enchanting world of feline charm! Here, we present a delightful table showcasing a selection of the most endearing and cute cats that will undoubtedly steal your heart. Whether you're a seasoned cat lover or a newcomer to the realm of feline adoration, this table is bound to bring a smile to your face.
                    <br><br>Each of these cats possesses its own unique charm, from the Scottish Fold's adorable folded ears to the Maine Coon's majestic presence. Visit our cat haven, spend time with these lovable feline friends, and perhaps you'll find the purr-fect companion to bring home. Embrace the joy of feline companionship and let these cute cats add warmth and happiness to your life!
                    </p>
                    <?php
            include 'db.php';
            $sql = "SELECT * FROM available_cats";

            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
            echo "<table class='table'>
                    <thead>
                        <tr>
                            <th>ID&nbsp;</th>
                            <th>Cat name&nbsp;</th>
                            <th>Adoption Status&nbsp;</th>
                            <th>Owner</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['cat_id']}</td>
                        <td>{$row['cat_name']}</td>
                        <td>{$row['adoption_status']}</td>
                        <td>{$row['owner']}</td>
                      </tr>";
            }

            echo "</tbody></table>";
            } else {

            echo "No results";
            }

            $conn->close();
            ?>
    </div>
<?php include 'footer.php'; ?>