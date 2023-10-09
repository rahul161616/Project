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
    .btn-success {
        width: 150px;
        height: 50px;
        box-shadow: 0px 0px 3px 0px #2C6322;

        font-size: 1.25rem;
        font-weight: 400;
        border-radius: 10px;
        opacity: 90%;
    }

    .delete_reorder {
        width: 230px;
    }

    .btn-success:hover {
        background-color: white;
        color: #2C632C;
        font-weight: 500;
        border: 1px solid black;
        box-shadow: 0px 0px 0px 0px black;
    }
</style>

<!-- <form method="get">
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
</form> -->


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
                            <input class="w-500" type="hidden" name="orders_id" value="<?= $row1->order_id ?>">
                            <tr>
                                <th scope='row'><?= $sr; ?></th>
                                <td><?= $row1->i_name; ?></td>
                                <!-- <td><?= $row1->i_price; ?><input type='text' name="<?= $row1->i_name; ?>" class='iprice' value="<?= $row1->i_price; ?>"> -->
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="number" class="form-control" value="<?= $row1->qty ?>" name="<?= $row1->id ?>">
                                    </div>
                                </td>
                                <td data-item="<?= $row1->id ?>" class='i_total'><?= $row1->i_price; ?></td>
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
            <input name="delete" type="submit" class="delete_reorder btn btn-success" value="Delete All And reorder">
        </div>
    </div>
</form>
<br>
</div>
<?php $this->view('includes/footer'); ?>