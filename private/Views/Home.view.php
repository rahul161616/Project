<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--      bootstrap -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">



    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {

            height: 70vh;
            font-family: 'Poppins', sans-serif;


        }

        .container {
            margin-top: 15%;

        }


        .img-text {
            width: 100%;
            height: 300px;
            display: block;

        }

        * {
            margin: 0;
            padding: 0;
        }

        /* body {

            background-color: rgb(235, 180, 113);
        } */

        img {
            width: 100%;
            border-radius: 30px;
        }

        .row a {
            padding: 0.75em 1em;
            background-color: rgb(173, 108, 28);
            font-size: 1.5rem;
            text-decoration: none;
            border-radius: 50px;


            margin-left: 35%;
            font-weight: 700;
            color: rgb(254, 254, 254);
            border: 3px solid rgb(141, 80, 7);

        }

        .row a:hover {
            background-color: rgb(141, 80, 7);
            color: rgb(254, 254, 254);
            padding: 0.8em 1.1em;
        }

        #home {
            background-color: aliceblue;
        }

        .row {


            display: flex;
            justify-content: center;
            align-items: center;

            width: 100vw;
            margin-left: -15px;



        }


        .mida {
            margin-bottom: 20px;



        }

        .side {
            margin: 5% 20% 5%;
        }



        h1 {
            font-size: 5rem;
            font-weight: 500;
            margin-bottom: 70px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: rgb(101, 77, 53);


        }

        p {
            font-size: 1.5rem;
            margin-top: -3px;
            margin-bottom: 30px;
            margin-left: 40px;
            color: brown;
        }

        span {
            font-size: larger;
            margin-right: 2px;
        }



        /* navbar */

        nav {
            border-bottom: 3px solid rgb(114, 45, 40);
            margin-bottom: -20px;
            background-color: rgb(208, 156, 93);

        }

        .navbar-brand {
            font-size: 2.5rem;
            font-weight: 500;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-right: 20px;
            color: rgb(80, 36, 36);
        }

        .nav-item {
            font-size: 1.75rem;
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




        .nav-link:hover {
            font-size: 1.5rem;
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
            color: black
        }


        /* footer */

        .social-icon {
            font-size: 1.75rem;
            margin: 20px 30px 0 30px;
            color: rgb(231, 223, 214);
            padding-bottom: 10px;

        }


        #aboutus {
            background-color: rgb(208, 156, 93);
        }

        #aboutus h1 {
            font-size: 4rem;


        }

        #aboutus p {
            color: black;

        }

        @keyframes foodAnimation {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .food-animation {
            animation: foodAnimation 2s infinite;
        }

        /* Add this CSS to style the footer */
        .footer {
            background-color: rgb(208, 156, 93);
            display: flex;
            justify-content: center;
            align-items: flex-end;
            height: 70px;
            /* Set the desired height for the footer */
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .social-icon {
            font-size: 1.75rem;
            margin: 10 10px;
            color: rgb(231, 223, 214);
        }
    </style>

<body>


    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= ROOT ?>/home">FOOD HUB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="right collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= ROOT ?>/homewithoutlogin">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= ROOT ?>/about_us"> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= ROOT ?>/Feedback">FeedBack</a>
                    </li>

    </nav>



    <div class="row">
        <div class="mida col-lg-6 col-md-6 col-sm-12 ">
            <div class="container mt-5 text-center">

                <h1>
                    <span class="food-animation">K</span>
                    <span class="food-animation">H</span>
                    <span class="food-animation">A</span>
                    <span class="food-animation">J</span>
                    <span class="food-animation">A</span>
                    <span class="food-animation"> </span>
                    <br>
                    <span class="food-animation">G</span>
                    <span class="food-animation">H</span>
                    <span class="food-animation">A</span>
                    <span class="food-animation">R</span>
                </h1>
            </div>

            <a href="<?= ROOT ?>/Customer_login">Order now</a>
        </div>
        <div class="mida col-lg-6 col-md-6 col-sm-12 ">
            <img src="<?php echo ROOT; ?>/Assets/food_illustration.png" alt="food.png">
        </div>




    </div>
    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<div class="footer">
    <a class="social-icon" href="#"><i class="fa-brands fa-facebook"></i></a>
    <a class="social-icon" href="#"><i class="fa-brands fa-instagram"></i></a>
    <a class="social-icon" href="#"><i class="fa-brands fa-youtube"></i></a>
    <a class="social-icon" href="#"><i class="fa-brands fa-tiktok"></i></a>
</div>