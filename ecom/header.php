<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoptronic</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>
         <style>
            .form-inline .form-control {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                margin-left: 20px;
            }

            .form-inline .btn {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
                margin-left: 20px;
            }
        </style>
  <link rel="icon" type="image/png" href="./assets/logo.ico"/>

</head>
<body>

<!-- start #header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
       <b> <p class="font-rale font-size-12 text-black-50 m-0">Shoptronic</p></b>
        <div class="font-rale font-size-14">
        <?php
        session_start();
        // Check if the user is logged in
        if (isset($_SESSION['user_id'])) {
            // User is logged in, display the logout link
             echo '<a href="logout.php">Logout</a>';
            } else {
                // User is not logged in, display the login and sign up links
                echo '<a href="login.php">Login</a>';
            }
            ?>
            <!-- <a href="./login.php" class="px-3 border-right border-left text-dark">Login</a>
            <a href="./logout.php" class="px-3 border-right border-left text-dark">Logout</a>-->
        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        
       <p><a class="navbar-brand" href="index.php"><img src="./assets/logo.png" alt="logo" id="logoh"></a>
        </p> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./categorie.php">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Brands</a>
                </li>
                
                
            </ul>


            <form method="GET" action="search.php" class="form-inline" >
            <div class="form-group mb-0"  >
                <input type="text" name="query" class="form-control" placeholder="Enter your search">
                <button type="submit" class="btn btn-primary ml-0">
                <i class="fas fa-search"></i>
                </button>
            </div>
            </form>




            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">