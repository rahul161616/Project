<?php $this->view("includes/header"); ?>
<?php $this->view("includes/sidebar"); ?>

<style>
    /* Add CSS styles for table alignment and beautification */
    .container {
        margin-left: 270px;
        /* Adjust this value to match the sidebar width */
        padding: 20px;
    }

    .table {
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        background-color: #FFE4B5;
        /* Light Orange background */
    }

    .table th,
    .table td {
        vertical-align: middle !important;
        color: #333;
        /* Darker text color for better readability */
    }

    .table thead {
        background-color: #FFA500;
        /* Orange background */
        color: #fff;
    }

    .table-dark th {
        background-color: #FF8C00;
        /* Darker Orange background */
    }

    .table-dark td {
        background-color: #FAFAD2;
        /* Light Goldenrod Yellow background */
    }
</style>


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <table class="table text-center table-dark">
                <thead>
                    <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Phone</th>
                        <th scope="col">Customer Address</th>
                        <th scope="col">Table Num</th>
                        <th scope="col">Payment Mode</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sn = 0;
                    foreach ($row as $order) : ?>
                        <tr>
                            <td><?= ++$sn ?></td>
                            <td><?= $order->full_name ?></td>
                            <td><?= $order->phone ?></td>
                            <td><?= $order->address ?></td>
                            <td><?= $order->table_no ?></td>
                            <td><?= $order->payment_mode ?></td>
                            <td><?= $order->total ?></td>
                            <td>
                                <table class="table text-center table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $gtot = 0;

                                        foreach ($row1 as $orderDetail) : ?>
                                            <?php if ($orderDetail->order_id == $order->id) : ?>
                                                <tr>
                                                    <td><?= $orderDetail->i_name ?></td>
                                                    <td><?= $orderDetail->i_price ?></td>
                                                    <td><?= $orderDetail->qty ?></td>
                                                    <td><?php $i_total = $orderDetail->i_price * $orderDetail->qty;
                                                        echo $i_total;
                                                        $gtot += $i_total;
                                                        ?></td>

                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><b>Grand total</b></td>
                                            <td> - </td>
                                            <td>-</td>
                                            <td><?= $gtot ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>