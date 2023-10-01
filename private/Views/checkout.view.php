<?php
$this->view('includes/header');
$this->view('includes/nav'); ?>


<form action="#" method="POST">
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
    <div class="mb-3">
        <label>Table No</label>
        <input type="text" name="table_n" class="form-control" id="table_n" required>
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
    <!-- <button class="btn btn-primary btn-block" name="place">Place Order</button> -->
    <!-- ... Your existing form fields ... -->
    <button class="btn btn-primary btn-block" id="checkDiscountBtn">Check Discount</button>
    <div>
        <p>Discount Result:</p>
        <div id="discountResult">

        </div> <!-- The discount result will be displayed here -->
    </div>

    <!-- ... Rest of your HTML ... -->

    <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
            <h3 id='gtotal'>Grand Total: <?= number_format($sub_total) ?></h3>
                
                <a href="<?= ROOT ?>/home" class="btn btn-primary btn-block">
                    <input type="button" class="btn btn-warning pull-left" value="< Continue Shopping" name="">
                </a>
                <a href="<?= ROOT ?>/checkout" class="btn btn-primary btn-block">
                    <input type="button" class="btn btn-warning pull-right" value="Pay >" name="">
                </a>

        </div>

    </div>
    </div>
</form>
<script>
    var initialSubTotal = <?= $sub_total ?>;
    document.getElementById('checkDiscountBtn').addEventListener('click', function() {
        event.preventDefault();
        var phoneNumber = document.getElementsByName('phone')[0].value;
        checkDiscount(phoneNumber);
    });

    function checkDiscount(phoneNumber) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                handleResult(xhr.responseText);
            }
        };
        xhr.open('POST', '<?= ROOT ?>/Ajax_discount_check', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('phone=' + phoneNumber);
    }

    function updateSubTotal(discount) {
        var subTotalElement = document.getElementById('gtotal');
        if (subTotalElement) {
            var subTotal = parseFloat(subTotalElement.textContent.replace(/,/g, '')); // Remove commas in the number

            // Calculate the new sub_total after applying the discount
            var newSubTotal = initialSubTotal - (initialSubTotal * (discount / 100));

            // Update the sub_total element with the new value
            subTotalElement.textContent = newSubTotal.toFixed(2);
        }
    }

    function handleResult(result) {
        try {
            var response = JSON.parse(result);
            if (typeof response.discount !== 'undefined') {
                var discount = response.discount;
                // Update the HTML with the discount value
                document.getElementById('discountResult').textContent = discount;
            }
            updateSubTotal(discount);

        } catch (e) {
            console.error('Error parsing JSON response:', e);
        }

    }
</script>


<?php $this->view('includes/footer');
?>