<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
<hr><br>
<?php if (isset($_COOKIE['edit-limit'])) { ?>
    <div class="alert alert-primary w-25" role="alert">
        <?php
        echo $_COOKIE['edit-limit'] ?? "";
        ?>
    </div>
<?php } ?>

<style>
    input {
        width: 200px;
    }
</style>
<form method="get">
    <table class="table">
        <tr>
            <th>Search Phone Number</th>
            <td>
                <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" required>
            </td>
        </tr>
        <tr>
            <td colspan="4"><input type="submit" value="Search" class="btn btn-success"></td>
        </tr>
    </table>
</form>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<form method="post" action="update">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Items</h1>
            </div>
        </div>

        <div class="col-lg-6 ">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Serial.no</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Quantity</th>
                        <th scope="col">Item Price</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    if (isset($rows1) && is_array($rows1)) {
                        $sr = 1;
                        foreach ($rows1 as $row1) { ?>
                            <!-- <input class="w-500" type="text" name="orders_id" value=" put <questionmarkequalto //$row1->order_id ?>"> -->
                            <tr>
                                <th scope='row'><?= $sr; ?></th>
                                <td><?= $row1->i_name; ?></td>
                                <!-- <td><?= $row1->i_price; ?><input type='text' name="<?= $row1->i_name; ?>" class='iprice' value="<?= $row1->i_price; ?>"> -->
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" onclick="decrementQuantity('<?= $row1->id ?>')"></button>
                                        </span>

                                        <input type="number" class="form-control" value="<?= $row1->qty ?>" name="<?= $row1->id ?>">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" onclick="incrementQuantity('<?= $row1->id ?>')"></button>
                                        </span>
                                    </div>
                                </td>
                                <td data-item="<?= $row1->id ?>" class='i_total'><?= ($row1->i_price * $row1->qty); ?></td>
                            </tr>
                        <?php $sr++;
                        } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="7">No Items were found in the list</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <input name="updates" type="submit" class="btn btn-success" value="Update">
            <br><br>
            <input name="delete" type="submit" class="btn btn-success" value="Delete All And reorder">

        </div>
    </div>
</form>
<br>
<div class="col-lg-3">
    <div class="border bg-light rounded p-4">
        <h3>Grand Total: <?= number_format($row1->total) ?></h3>
        <h4 class="text-right" id='gtotal'></h4>
        <a href="<?= ROOT ?>/home" class="btn btn-primary btn-block">
            <input type="button" class="btn btn-warning pull-left" value="<Delete" name="">
        </a>
    </div>
</div>
</div>
<script>
    function incrementQuantity(itemId) {
        var quantityInput = document.querySelector('input[name="quantity[' + itemId + ']"]');
        if (quantityInput) {
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }

    }

    function decrementQuantity(itemId) {
        var quantityInput = document.querySelector('input[name="quantity[' + itemId + ']"]');
        if (quantityInput && parseInt(quantityInput.value) > 0) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }

    }

    function updateTotal(itemId) {
        var quantityInput = document.querySelector('input[name="quantity[' + itemId + ']"]');
        var priceInput = document.querySelector('.iprice[value="' + itemId + '"]');
        var totalElement = document.querySelector('td[data-item="' + itemId + '"].i_total');
        if (quantityInput && priceInput && totalElement) {
            var quantity = parseInt(quantityInput.value);
            var price = parseFloat(priceInput.value);
            var total = quantity * price;
            totalElement.innerText = total.toFixed(2); // Format to two decimal places
            updateGrandTotal(); // Call the function to update the Grand Total
        }
    }

    function updateGrandTotal() {
        var totalElements = document.querySelectorAll('td.i_total');
        var grandTotal = 0;
        totalElements.forEach(function(element) {
            grandTotal += parseFloat(element.innerText);
        });
        document.getElementById('gtotal').innerText = grandTotal.toFixed(2); // Update the Grand Total
    }
</script>
<?php $this->view('includes/footer'); ?>