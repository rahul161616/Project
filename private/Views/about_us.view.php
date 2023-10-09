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
         * {
             margin: 0;
             padding: 0;
         }

         /* 
        body {

            background-color: rgb(235, 180, 113);
        } */

         img {
             width: 100%;
             border-radius: 30px;
             margin-left: 7%;
         }

         .row a {
             padding: 0.75em 1em;
             background-color: rgb(173, 108, 28);
             font-size: 1.5rem;
             text-decoration: none;
             border-radius: 50px;


             margin-left: 25%;
             font-weight: 700;
             color: rgb(254, 254, 254);
             border: 3px solid rgb(141, 80, 7);

         }

         .row a:hover {
             background-color: rgb(141, 80, 7);
             color: rgb(254, 254, 254);
             padding: 0.8em 1.1em;
         }

         .row {

             /* background-color: green; */
             display: flex;
             justify-content: center;
             align-items: center;
             margin: 50px 7%;
             max-width: 100%;



         }


         .mida {
             margin-bottom: 30px;


         }


         h1 {
             font-size: 4.5rem;
             font-weight: 500;
             margin-left: 30px;
             font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
             margin-bottom: 20px;
             color: rgb(80, 36, 36);
         }

         h3 {

             margin-top: -3px;
             margin-bottom: 50px;

             color: black;
         }

         span {
             font-size: larger;
             margin-right: 2px;
         }



         /* navbar */

         nav {
             border-bottom: 3px solid rgb(208, 156, 93);
             /* margin-bottom: -20px; */
             background-color: rgb(208, 156, 93);

         }

         .navbar-brand {
             font-size: 2.5rem;
             font-weight: 500;
             font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

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
             color: black
         }


         /* footer */

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
                         <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/homewithoutlogin">Menu</a>
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
             <h1>Khaja Ghar</h1>
             <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eaque culpa, dolorem quod ab omnis aut minus, illum hic, doloribus distinctio asperiores modi blanditiis excepturi. Nihil voluptatum porro voluptas earum!</h3>
             <a href="<?= ROOT ?>/home">Go Home</a>
         </div>
         <div class="mida col-lg-6 col-md-6 col-sm-12 ">
             <img src="<?php echo ROOT; ?>/Assets/about_us.png" alt="food.png">
         </div>



     </div>





 </body>


 <!-- bootstrap -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>