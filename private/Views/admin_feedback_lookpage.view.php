<?php $this->view("header"); ?>
<?php $this->view("includes/sidebar"); ?>

<style>
    .table-container {
        display: flex;
        justify-content: center;
        /* align-items: center; */
        height: calc(100vh + 350px);
        /* Adjust this value to create space from the top */
        margin-top: 50px;
        /* Adjust this value to center the table vertically */
    }

    table {
        background-color: orange;
        width: 100%;
        max-width: 800px;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Feedback</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) : ?>
                <tr>
                    <td><?= $row->id; ?></td>
                    <td><?= $row->email; ?></td>
                    <td><?= $row->feedback; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>