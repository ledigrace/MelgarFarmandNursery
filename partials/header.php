    <?php
    include("partials/connect.php");
    ?>

    <header class="header_section">
        <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
            <span><img src="../floram/images/logo.jpg">Melgar farm and Nursery</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                <div class="dropdown">
                <a class="nav-link" href="fruit.html">
                    <button class="dropbtn">Products
                    <i class="fa fa-caret-down"></i>
                    </button>
                </a>
                <div class="dropdown-content">
                    <a href="fruit-seedlings.html">Seedlings</a>
                    <a href="fruit-grafted.html">Grafted Trees and Plants</a>
                    <a href="fruit-fruits.html">Fruits</a>
                    <a href="fruit.html">All Products</a>
                </div>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-icon-link" href="#">
                    <ion-icon class="cart-icon" name="cart-outline"></ion-icon>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-icon-link" href="#">
                    <ion-icon class="person-icon" name="person-outline"></ion-icon>
                </a>
                </li>
            </ul>
            </div>
        </nav>
        </div>
    </header>