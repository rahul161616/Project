<!-- my cart.php -->
<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-cetner border rounded bg-light my-5"></div>
            <h1>My Items</h1>
        </div>

        <div class="col-lg-9">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Serial.no</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Item Quantity</th>
                        <th scope="col">Item Total</th>
                        <th scope="col">Remove Item</th>

                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php if ($rows) : ?>
                        <?php $sr = 1; ?>
                        <?php foreach ($rows as $row) : ?>
                            <tr>
                                <th scope='row'><?php echo $sr; ?></th>
                                <td><?php echo $row->i_name; ?></td>
                                <td><?php echo $row->i_price; ?><input type='hidden' class='iprice' value=<?php echo $row->i_price; ?>></td>

                                <td>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a class="btn btn-default" href="<?= ROOT ?>/add_to_cart/subtract_quantity/<?= $row->id ?>">-</a>
                                        </span>
                                        <input oninput="edit_quantity(this.value,'<?= $row->id ?>')" type="text" class="form-control" value="<?= $row->cart_qty ?>" name="quantity">
                                        <span class="input-group-btn">
                                            <a class="btn btn-default" href="<?= ROOT ?>/add_to_cart/add_quantity/<?= $row->id ?>">+</a>
                                        </span>
                                    </div>
                                </td>



                                <td class='i_total'><?= ($row->i_price * $row->cart_qty); ?></td>
                                <td>
                                    <form method='POST' action="<?= ROOT ?>/Add_to_cart/remove/<?= $row->id ?>">
                                        <button name='Remove_item' delete_id="<?= $row->id ?>" onclick="delete_item(this.getAttribute('delete_id'))" class='btn btn-sm btn-outline-danger'>Delete</button>
                                </td>
                                <input type='hidden' name='i_name' value='$value[i_name]'>
                                </form>
                            </tr>
                            <?php $sr++; ?>
                        <?php endforeach; ?>
                    <?php else :  ?>
                        <div>No Items were found in the list</div>
                        <!-- needs styling -->
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
                <h3>Grand Total:</h3>
                <h4 class="text-right" id='gtotal'></h4>

                <?php
                if (isset($_SESSION['CART']) && count($_SESSION['CART']) > 0) {
                ?>
                    <form action="./place.php" method="POST">
                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" name="name" class=" form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                            <label>Phone Number</label>
                            <input type="number" name="phone" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_Mode" id="flexRadioDefault1" value="Esewa">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Esewa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_Mode" value="Cash_on_Counter" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Counter
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block" name="place">Place Order</button>

                    </form>
                <?php
                }
                ?>
            </div>

        </div>

    </div>
    <script>
        function edit_quantity(quantity, id) { //send value to ajax
            if (isNaN(quantity))
                return;
            send_data({
                quantity: quantity.trim(),
                id: id.trim()
            }, "edit_quantity");
        }

        function delete_item(id) { //send value to ajax
            if (isNaN(quantity))
                return;
            send_data({
                id: id.trim()
            }, "delete_item");
        }

        function send_data(data = {}, data_type) {
            var ajax = new XMLHttpRequest();
            ajax.addEventListener('readystatechange', function() {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    handle_result(ajax.responseText);
                }
            });
            ajax.open("POST", "<?= ROOT ?>/ajax_cart/" + data_type + "/" + JSON.stringify(data), true);
            ajax.send();
        }

        function handle_result(result) {
            console.log(result);
            if (result != "") {
                var obj = JSON.parse(result);
                if (typeof obj.data_type != 'undefined') {
                    if (obj.data_type == "delete_item") {
                        window.location.href = window.location.href;
                    } else {
                        if (obj.data_type == "edit_quantity") {
                            window.location.href = window.location.href;
                        }
                    }
                }
            }
        }
    </script>
    <?php $this->view('includes/footer'); ?>