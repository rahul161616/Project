<!-- ?This is the place where we have only html 
Loading is done in from the main controller-->
<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>

 <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
    img{
    display: inline-block;
    max-height: 250px;
   min-height: 250px;
  width: 420px;
   padding: 20px 10px;
   border-radius: 50px;
   background-color: aliceblue;

}

.sign{
    font-size: 40px;

}

input{
    position: relative;
    bottom: 10px;
    height: 40px;
    width: 40px;
    margin: 10px;
    text-align: center;
    
}


h1{
    font-size: 2.5rem;
    
}
 span , i{
    font-size: 1.15rem;
 }

 button{
    background-color: #E4A11B;
    border: 2px solid #E4A11B;
    border-radius: 7px;
    font-weight: 400;
 }

button:hover{
    background-color: black;
    border: 2px solid black;
    transition: 0.7s;
    color: #E4A11B;
}
</style>

            <div class="row text-center py-5">
                <?php

                function component($i_name, $i_price, $i_img, $i_alt, $i_content, $i_temId)
                {
                    $element = "     
       
                          <div class=\"col-lg-4 col-md-6 col-sm-12 \">
                           <form method=\"POST\" form action=\"" . ROOT . "/add_to_cart/" . $i_temId . "\">
                          <div class=\"card shadow\">
                           <div>
                            <img src=\"" . ROOT . "/Assets/$i_img\" alt=\"$i_alt\" class=\"img-fluid \"> 
                             </div>
                            <div class=\"card-body\">
                            <h1 class=\"food_name\">$i_name</h1>
                           
                            <h4>$i_price</h4>


                            <button class=\"   px-4 py-2 add-to-cart \" type=\"submit\"><span>$i_content</span> <i
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
       
            

        
        