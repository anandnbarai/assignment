<!DOCTYPE html>
<html lang="en">

<head>
    <title>UrbanRead.com</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dashboard | UrbanRead</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <style>
        .logo {
            height: 70px;
            width: 70px;
            object-fit: contain;
        }
    </style>
</head>

<body>
  
    <div class="container-fluid p-0">
        <!-- First child -->
        <nav class="navbar navbar-expand-lg navbar-dark text-white bg-dark">
            <div class="container-fluid">
                <img src="images/logo.png" class="logo"></img>

                <!-- Button Shown when website convert into mobile view, responsive website button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- data-bs-target and id in div must be same to work responsive button,in this :example navbarSupportedContent -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Main Menu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Add Book</a></li>
                                <li><a class="dropdown-item" href="#">Delete Book</a></li>
                                <li><a class="dropdown-item" href="#">Search Book</a></li>
                                <li><a class="dropdown-item" href="#">View Book</a></li>
                                <li><a class="dropdown-item" href="#">Edit Book Recrod</a></li>
                                <li><a class="dropdown-item" href="#">Change Password</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- d-flex means display flex which means come in horizontal row-->
                    <form class="d-flex" action="search_product.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="search_data">
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                        <input type="submit" value="Search" class='btn btn-outline-dark text-dark bg-light'
                            name="search_data_product">
                    </form>
                </div>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome Guest!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login!</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="bg-light">
            <h3 class="text-center mt-2">UrbanRead.com</h3>
            <p class="text-center">Discover Literary Treasures at UrbanRead.com</p>
        </div>
        <!-- Include footer -->
        <?php
        include('footer.php');
        ?>
    </div>
</body>

</html>