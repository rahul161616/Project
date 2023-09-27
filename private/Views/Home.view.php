<!-- ?This is the place where we have only html 
Loading is done in from the main controller-->





<div class="container-fluid">
    <h1><i class="fa fa-plus"></i>This is home</h1>

</div>

<div class="col-lg-4 col-md-6 col-sm-12 my-3">
    <form action="manage_cart.php" method="POST">
        <div class="card shadow">

            <div class="row text-center py-5">
                <?php
                echo "<pre>";
                print_r($rows);


                ?>
            </div>