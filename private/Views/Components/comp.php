<?php
function component($i_name, $i_price, $i_img, $i_alt, $i_content, $i_itemId)
{
    $element = "     
       
                          <div class=\"col-lg-4 col-md-6 col-sm-12 my-3\">
                           <form action=\"./manage_cart.php\" method=\"POST\">
                          <div class=\"card shadow\">
                           <div>
                            <img src=\"$i_img\" alt=\"$i_alt\" class=\"img-fluid \">
                             </div>
                            <div class=\"card-body\">
                            <h1 class=\"food_name\">$i_name</h1>
                           
                            <h4>$i_price</h4>
                            <button class=\"btn btn-warning add-to-cart \" name=\"addmenu\" type=\"submit\">$i_content <i
                                    class=\"fa-solid fa-utensils\"></i></button>
                                      <input type=\"hidden\" value=\"$i_name\" name=\"i_name\">
                               <input type=\"hidden\" value=\"$i_price\" name=\"i_price\">
                             <input type=\"hidden\" value=\"$i_itemId\" name=\"i_itemId\">   
                           </div>
                            </div>
                </form>
            </div>
";
    echo $element;
}
