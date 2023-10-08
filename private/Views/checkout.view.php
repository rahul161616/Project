<?php
$this->view('includes/header');
$this->view('includes/nav'); ?>


<style>
    .new {
        width: 200px;

    }

    input {
        writing-mode: sideways-lr;
    }
</style>
<div class="mb-3">
    <?php if (is_array($rows)) : ?>

        <form method="POST">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
</div>
<div class="mb-3">
    <label for="phone">Phone Number</label>
    <input type="number" name="phone" class="form-control" id="phone" required>
</div>
<div class="mb-3">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address" required>
</div>
<div class="mb-3">
    <label for="table_n">Table No</label>
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
    <!-- <p>Discount Result:</p> -->
    <br>
    <div id="discountResult">

    </div> <!-- The discount result will be displayed here -->
</div>

<!-- ... Rest of your HTML ... -->

<div class="col-lg-3">
    <div class="border bg-light rounded p-4">
        <label for="total">
            <h3 id='gtotal'>Grand Total:<?= number_format($sub_total) ?></h3>
        </label>
        <input class="form-check-input" type="hidden" name="total" id="total" value="<?= $sub_total ?>">

        <a href="<?= ROOT ?>/home" class="btn  btn-block">
            <input type="button" class="new btn btn-primary pull-left" value="< Continue Shopping" name="">
        </a>
        <a href="<?= ROOT ?>/checkout" class="btn btn-block">
            <input type="submit" class="new btn btn-primary pull-right" value="Pay >" id="pay">
        </a>
        </form>
    <?php else : ?>
        <div>
            No Items were found in the list!</p>
            <!-- <-- needs styling -->
        </div>
    <?php endif; ?>
    </div>

</div>
</div>
<?php $this->view('includes/footer');
?>
<script>
    // Define the countdown timer variable globally

    var initialSubTotal = <?= $sub_total ?>;
    document.getElementById('checkDiscountBtn').addEventListener('click', function() {
        event.preventDefault();
        var phoneNumber = document.getElementsByName('phone')[0].value;
        checkDiscount(phoneNumber);
    });

    function checkDiscount(phoneNumber) { //check discount 
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

    function updateSubTotal(discount) { //update the total in the html display box where the subtotal is being displayed

        var subTotalElement = document.getElementById('gtotal');
        var totalInputElement = document.getElementById('total');
        if (subTotalElement) {
            var subTotal = parseFloat(subTotalElement.textContent.replace(/,/g, '')); // Remove commas in the number

            // Calculate the new sub_total after applying the discount
            var newSubTotal = initialSubTotal - (initialSubTotal * (discount / 100));
            subTotalElement.innerHTML = 'Grand Total: <span id="grandTotal">' + newSubTotal.toFixed(2) + '</span>';
            // Update the sub_total element with the new value
            totalInputElement.value = newSubTotal.toFixed(2);
        }
    }
    // Check if there's a stored countdown timer value in localStorage

    // var storedTimer = localStorage.getItem('countdownTimer');
    // alert(storedTimer);
    // var countdownTimer;

    // Fetch consistent content from the server using AJAX
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('consistentContent').innerHTML = xhr.responseText;
            // Start or continue the countdown timer
            startOrContinueCountdown();
        }
    };

    // Use a unique identifier (e.g., order ID) as the key in localStorage
    var uniqueIdentifier = 'your_unique_order_identifier';

    // Use the unique identifier to fetch the correct content
    xhr.open('GET', 'fetch_consistent_content.php?orderID=' + uniqueIdentifier, true);
    xhr.send();

    function startOrContinueCountdown() {
        if (storedTimer !== null && !isNaN(storedTimer)) {
            startCountdownTimer(storedTimer);
        } else {
            // Start a new countdown timer (e.g., 2 minutes)
            startCountdownTimer(120); // 2 minutes in seconds
        }
    }
    // Function to start the countdown timer
    function startCountdownTimer(duration) {
        var timer = duration,
            minutes, seconds;
        countdownTimer = setInterval(function() {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            document.getElementById('countdownTimer').textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                clearInterval(countdownTimer);
                var editButton = document.getElementById('editButton');
                if (editButton) {
                    editButton.classList.add('disabled');
                    editButton.removeAttribute('href');
                }
            }
        }, 1000);
        // Store the remaining time in localStorage
        localStorage.setItem('countdownTimer', timer);
    }
    // Add an event listener to the "Pay" button
    document.getElementById('payButton').addEventListener('click', function() {
        // Start the countdown timer when "Pay" button is clicked
        startCountdownTimer(120); // 2 minutes in seconds
    });

    function handleResult(result) {
        try {
            var response = JSON.parse(result);
            if (typeof response.discount !== 'undefined') {
                var discount = response.discount;
                // Update the HTML with the discount value
                // document.getElementById('discountResult').textContent = discount;
            }
            updateSubTotal(discount);

        } catch (e) {
            console.error('Error parsing JSON response:', e);
        }


    }
</script>