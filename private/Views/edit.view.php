<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
<hr><br>
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
if (isset($rows) && is_array($rows)) {
    foreach ($rows as $key => $value) {
        echo "Hi";
        echo "<tr>";
        echo "<td>" . $value->id . "</td>";
    }
} elseif (isset($error)) {
    echo $error;
}
?>
<?php $this->view('includes/timer'); ?>
<?php $this->view('includes/footer'); ?>