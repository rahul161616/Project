<?php $this->view("includes/header"); ?>
<?php $this->view("includes/sidebar"); ?>

<div class="container-fluid mt-5">
    <div class="row justify-content-between">
        <!-- Sidebar (empty) -->
        <div class="col-md-3">
        </div>
        <!-- Content -->
        <div class="col-md-9">
            <!-- Product management forms -->
            <div class="row justify-content-center">
                <!-- Create product form -->
                <div class="col-md-6">
                    <form method="post" class="wide-form" action="Updatestaffbyadmin">
                        <input type="hidden" name="action" value="create">
                        <h2 class="text-center">Create Staff</h2>
                        <div class="form-group">
                            <label for="product_name">Staff Id:</label>
                            <input type="number" name="staff_id" id="staff_id" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="product_name">Staff Name:</label>
                            <input type="text" name="staff_name" id="staff_name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="staff_address">Staff Address:</label>
                            <input type="text" name="staff_address" id="staff_address" step="0.01" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="staff_role">Staff Role:</label>
                            <input type="text" name="staff_role" id="staff_role" class="form-control" required>
                        </div>
                        <br>
                        <br>
                        <div class="form-group text-center">
                            <input type="submit" value="Create Staff" class="btn btn-primary">
                        </div>
                    </form>
                </div>

                <!-- Update product form -->
                <div class="col-md-6">
                    <form method="post" class="wide-form" action="Updatestaffbyadmin">
                        <input type="hidden" name="action" value="update">
                        <h2 class="text-center">Update Staff</h2>
                        <div class="form-group">
                            <label for="staff_id">ID:</label>
                            <input type="number" name="id" id="id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="staff_id">Staff ID:</label>
                            <input type="number" name="staff_id" id="staff_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="staff_name">Staff Name:</label>
                            <input type="text" name="staff_name" id="staff_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="staff_address">Staff Address:</label>
                            <input type="text" name="staff_address" id="staff_address" step="0.01" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="staff_role">Staff Role:</label>
                            <input type="text" name="staff_role" id="staff_role" class="form-control">
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <input type="submit" value="Update Staff" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>

            <!-- Delete product form -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <form method="post" class="wide-form" action="Updatestaffbyadmin">
                        <input type="hidden" name="action" value="delete">
                        <h2 class="text-center">Delete Staff</h2>
                        <div class="form-group">
                            <label for="staff_id">Staff ID:</label>
                            <input type="number" name="staff_id" id="staff_id" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <input type="submit" value="Delete Staff" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
            <!-- Product cards -->
            <div class="row mt-5 justify-content-center">
                <?php
                // Display products with images, edit, and delete options
                foreach ($data as $row) {
                    echo "<div class='col-md-4 mb-3'>";
                    echo "<div class='card product-card'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>ID: " . $row->id . "</h5>";
                    echo "<h5 class='card-title'>Staff ID: " . $row->staff_id . "</h5>";
                    echo "<p class='card-text'>Name: " .  $row->staff_name . "</p>";
                    echo "<p class='card-text'>Address:" . $row->staff_address . "</p>";
                    echo "<p class='card-text'>Role:" .  $row->staff_role . "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>