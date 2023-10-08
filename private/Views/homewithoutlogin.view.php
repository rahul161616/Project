<?php $this->view('includes/header'); ?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    /* Common styles */
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: rgb(235, 180, 113);
    }

    .row {
        justify-content: center;
        align-items: center;
        margin: 50px 0;
    }

    .card {
        border-radius: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin: 10px;
    }

    img {
        max-width: 100%;
        height: auto;
        border-radius: 30px 30px 0 0;
    }

    .card-body {
        padding: 1.5rem;
    }

    .food_name {
        font-size: 1.5rem;
        font-weight: bold;
        color: rgb(80, 36, 36);
    }

    h4 {
        font-size: 1.25rem;
        color: black;
    }

    /* Add style to the "Add to Cart" button */
    .add-to-cart {
        background-color: blueviolet;
        color: white;
        border: none;
        border-radius: 30px;
        padding: 5px 15px;
        font-size: 1rem;
        cursor: pointer;
    }

    /* Adjust button style on hover */
    .add-to-cart:hover {
        background-color: purple;
    }

    /* Navbar styles */
    nav {
        border-bottom: 3px solid rgb(208, 156, 93);
    }

    .navbar-brand {
        font-size: 2.5rem;
        font-weight: 500;
        color: rgb(80, 36, 36);
    }

    .nav-item {
        font-size: 1.5rem;
        margin: 0 10px;
        color: brown;
    }

    .container-fluid {
        margin: 0px 30px;
        display: flex;
        justify-content: end;
    }

    .active {
        font-weight: 600;
    }

    ul {
        display: flex;
    }

    .nav-item:hover {
        font-size: 1.75rem;
        font-weight: 500;
    }

    .admin_login {
        font-size: 1.75rem;
        font-weight: 500;
        margin: 0 10px;
        color: black;
        text-decoration: none;
    }

    i.fa-lock {
        font-size: 2.5rem;
        margin: 10px;
        color: black;
    }

    /* Footer styles */
    .footer {
        display: flex;
        justify-content: center;
    }

    .social-icon {
        font-size: 1.75rem;
        margin: 40px 30px 0 30px;
        color: rgb(250, 233, 211);
    }

    .social-icon:hover {
        color: rgb(254, 223, 231);
        font-size: 2rem;
    }
</style>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= ROOT ?>/mainhome">FOOD HUB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?= ROOT ?>/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/homewithoutlogin">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= ROOT ?>/about_us"> About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/feedBack">FeedBack</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-between">
        <?php
        function component($i_name, $i_price, $i_img, $i_alt)
        {
            $element = "
            <div class=\"col-lg-4 col-md-6 col-sm-12 my-3\">
                <div class=\"card shadow\">
                    <img src=\"" . ROOT . "/Assets/$i_img\" alt=\"$i_alt\" class=\"img-fluid\">
                    <div class=\"card-body\">
                        <h1 class=\"food_name\">$i_name</h1>
                        <h4>$i_price</h4>
                    </div>
                </div>
            </div>";
            echo $element;
        }

        if ($data) {
            foreach ($data as $row) {
                component($row->i_name, $row->i_price, $row->i_img, $row->i_alt);
            }
        } else {
            echo "Error occurred while fetching data from the database.";
        }
        ?>
    </div>
</div>

<?php $this->view('includes/footer'); ?>