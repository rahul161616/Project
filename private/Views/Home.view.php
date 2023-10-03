<!-- ?This is the place where we have only html 
Loading is done in from the main controller-->
<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>


<div class="col-lg-4 col-md-6 col-sm-12 my-3">
    <div class="card shadow">

        <div class="row text-center py-5">
            <div class="row text-center py-5">
                <?php

                function component($i_name, $i_price, $i_img, $i_alt, $i_content, $i_temId)
                {
                    $element = "     
       
                          <div class=\"col-lg-4 col-md-6 col-sm-12 my-3\">
                           <form method=\"POST\" form action=\"" . ROOT . "/add_to_cart/" . $i_temId . "\">
                          <div class=\"card shadow\">
                           <div>
                            <img src=\"" . ROOT . "/Assets/$i_img\" alt=\"$i_alt\" class=\"img-fluid \"> 
                             </div>
                            <div class=\"card-body\">
                            <h1 class=\"food_name\">$i_name</h1>
                           
                            <h4>$i_price</h4>


                            <button class=\"btn btn-warning add-to-cart \" type=\"submit\">$i_content <i
                                    class=\"fa-solid fa-utensils\"></i></button>
                                    
                           </div>
                            </div>
                </form>
            </div>
";
                    echo $element;
                }

                if ($rows) {
                    foreach ($rows as $row) {
                        component($row->i_name, $row->i_price, $row->i_img, $row->i_alt, $row->i_content, $row->i_temId);
                    }
                } else {
                    // Handle the error case
                    echo "Error occurred while fetching data from the database.";
                }


                ?>
            </div>
        </div>
        <?php $this->view('includes/timer'); ?>
        <?php $this->view('includes/footer'); ?>