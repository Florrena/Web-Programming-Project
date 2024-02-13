<?php
include ("header.php");
include ("config.php");

$sql = "SELECT * FROM products";
$result = $connection->query($sql);   

?>

    <!-- Shop body container -->
    <div class="catnshop-container">

        <!-- Shop heading text -->
        <div class="cat-header">
            <img src="images/paw.webp">
            <h1>Shop in Style: Discover Purr-fect Cat Products for Your Feline Friend</h1>
            <img src="images/paw.webp">
        </div>

        <!-- Shop cards -->
        <div class="cat-cards">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="card">
                        <img src="<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
                        <h2><?php echo $row['product_name']; ?></h2>
                        <p><?php echo $row['product_price']; ?> €</p>
                        <a href="shopping-cart.php"><button>Add to cart</button></a>
                    </div>
                <?php }
            }
            ?>
        </div>
    </div>

<?php

include ("footer.php");

?>