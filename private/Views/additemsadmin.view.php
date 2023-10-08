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
                    <form method="post" enctype="multipart/form-data" class="wide-form" action="Updateordersbyadmin">
                        <input type="hidden" name="action" value="create">
                        <h2 class="text-center">Create Item</h2>
                        <div class="form-group">
                            <label for="product_name">Item Name:</label>
                            <input type="text" name="i_name" id="i_name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="product_price">Item Price:</label>
                            <input type="number" name="i_price" id="i_price" step="0.01" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product_image">Item Image:</label>
                            <input type="file" name="i_img" id="i_img" accept="image/*" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product_image">Item Alt:</label>
                            <input type="text" name="i_alt" id="i_alt" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product_image">Item Content:</label>
                            <input type="text" name="i_content" id="i_content" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product_image">Item id:</label>
                            <input type="text" name="i_temId" id="i_temId" class="form-control" required>
                        </div>
                        <br>
                        <br>
                        <div class="form-group text-center">
                            <input type="submit" value="Create Product" class="btn btn-primary">
                        </div>
                    </form>
                </div>

                <!-- Update product form -->
                <div class="col-md-6">
                    <form method="post" enctype="multipart/form-data" class="wide-form" action="Updateordersbyadmin">
                        <input type="hidden" name="action" value="update">
                        <h2 class="text-center">Update Product</h2>
                        <div class="form-group">
                            <label for="update_product_id">ID:</label>
                            <input type="number" name="id" id="id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="update_product_name">Item Name:</label>
                            <input type="text" name="i_name" id="i_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="update_product_price">Item Price:</label>
                            <input type="number" name="i_price" id="update_product_price" step="0.01" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="update_product_image">Item Image:</label>
                            <input type="file" name="i_img" id="i_img" accept="image/*" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_product_image">Item Alt:</label>
                            <input type="text" name="i_alt" id="i_alt" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_product_image">Item Content:</label>
                            <input type="text" name="i_content" id="i_content" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_product_image">Item ID:</label>
                            <input type="number" name="i_temId" id="i_temId" class="form-control">
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <input type="submit" value="Update Product" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>

            <!-- Delete product form -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <form method="post" class="wide-form" action="Updateordersbyadmin">
                        <input type="hidden" name="action" value="delete">
                        <h2 class="text-center">Delete Product</h2>
                        <div class="form-group">
                            <label for="delete_product_id">Item ID:</label>
                            <input type="number" name="i_temId" id="i_temId" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <input type="submit" value="Delete Product" class="btn btn-danger">
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
                    if (!empty($row->i_img)) {
                        echo "<img src='" . ROOT . "/Assets/$row->i_img' class='card-img-top'>";
                    }
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>ID: " . $row->id . "</h5>"; //use id to change
                    echo "<h5 class='card-title'>Item ID: " . $row->i_temId . "</h5>";
                    echo "<p class='card-text'>Name: " .  $row->i_name . "</p>";
                    echo "<p class='card-text'>Price: $" .  $row->i_price . "</p>";
                    echo "<p class='card-text'>Alt: " .  $row->i_alt . "</p>";
                    echo "<p class='card-text'>Content: " .  $row->i_content . "</p>";
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