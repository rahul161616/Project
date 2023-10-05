<?php $this->view('includes/header'); ?>




 <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
       * {
            margin: 0;
            padding: 0;
        }

        body {

            background-color: rgb(235, 180, 113);
        }

        img {
            width: 100%;
            border-radius: 30px;
        }

        .row a {
            padding: 0.75em 1em;
            background-color: rgb(243, 230, 230);
            font-size: 1.5rem;
            text-decoration: none;
            border-radius: 50px;
            color: black;
            margin: 0 15%;
            font-weight: 500;
            color: blueviolet;
            border: 2px solid rgb(121, 65, 21);

        }

        .row {

            /* background-color: green; */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 10%  ;
            max-width: 100%;

             

        }


        .mida{
                  margin-bottom: 30px;

        }


        h1 {
            font-size: 5rem;
            font-weight: 500;
            margin-bottom: -3px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

            color: rgb(80, 36, 36);
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
    border-bottom: 3px solid rgb(208, 156, 93);
    margin-bottom: -20px;
    /* background-color: rgb(208, 156, 93);; */
   
}
.navbar-brand{
    font-size: 2.5rem;
    font-weight: 500;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

            color: rgb(80, 36, 36);
}

.nav-item{
    font-size: 1.5rem;
    margin: 0 10px;
    color: brown;
    
}
      
.container-fluid{
    margin: 0px 30px;
 display: flex;
 justify-content: end;
    
    
}

.active{
   
    font-weight: 600;
}

ul{
    display: flex;
}

.nav-item:hover{
font-size: 1.75rem;
font-weight: 500;


} 

.admin_login{
     font-size: 1.75rem;
     font-weight:500;
    margin: 0 10px;
    color: black;
    text-decoration: none;
}

i.fa-lock{
    font-size: 2.5rem;
    margin: 10px;
    color:black
}


/* footer */

.footer{
   
   display: flex;
   justify-content: center;
}

.social-icon{
    font-size: 1.75rem;
    margin: 40px 30px 0 30px;
    color: rgb(250, 233, 211);
    
}

.social-icon:hover{
    color: rgb(254, 223, 231);
    font-size: 2rem;
}
</style>

     <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= ROOT ?>/mainhome">FOOD HUB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="right collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/mainhome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT ?>/about_us"> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT ?>/customer_login">Orders</a>
                    </li>
                    

                    




            </div>
            
                    <a class="admin_login" href="<?= ROOT ?>/login"><i class="fa-solid fa-lock"></i> Admin Login</a>
        </div>
    </nav> 



    <div class="row">
        <div class="mida col-lg-6 col-md-6 col-sm-12 ">
            <h1>Khaja Ghar</h1>
            <p><span>#</span>Let's End the Hunger</p>
            <a href="<?= ROOT ?>/customer_login">Order now</a>
        </div>
        <div class="mida col-lg-6 col-md-6 col-sm-12 ">
            <img src="<?php echo ROOT; ?>/Assets/food_illustration.png" alt="food.png">
        </div>



    </div>
    <div class="footer">
    <a class="social-icon" href="#"><i class="fa-brands fa-facebook"></i></a>
    <a class="social-icon" href="#"><i class="fa-brands fa-instagram"></i></a>
    <a class="social-icon" href="#"><i class="fa-brands fa-youtube"></i></a>
    <a class="social-icon" href="#"><i class="fa-brands fa-tiktok"></i></a>
</div>

   
<?php $this->view('includes/footer'); ?>