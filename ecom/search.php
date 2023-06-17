<?php
    ob_start();
    // include header.php file
    include ('header.php');

    // Establish a database connection (replace with your actual connection details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopee";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the search query from the URL parameter
    $query = $_GET['query'];

    // Prepare the SQL query to search for products
    $sql = "SELECT * FROM product WHERE item_brand LIKE '%$query%' OR item_name LIKE '%$query%'";

    // Execute the query
    $result = $conn->query($sql);
?>

<!-- Your HTML code here -->

<?php if ($result->num_rows > 0): ?>
    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <?php while ($item = $result->fetch_assoc()): ?>
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                        <!-- Rest of the product details -->
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <!-- Rest of the product details -->
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php
    // include footer.php file
    include ('footer.php');
    // Clear the output buffer and flush the output
    ob_end_flush();
?>
<!--  -->
