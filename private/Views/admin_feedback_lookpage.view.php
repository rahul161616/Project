<?php $this->view("header"); ?>
<?php $this->view("includes/sidebar"); ?>

<style>
    .table-container {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        /* Adjust this value to center the table vertically */
        overflow-x: auto;
        /* Enable horizontal scrolling */
    }

    table {
        background-color: orange;
        width: 100%;
        /* Set the width to 100% to enable horizontal scrolling */
        max-width: 800px;
        /* Set a maximum width if needed */
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

    /* Media queries for smaller screens */
    @media only screen and (max-width: 768px) {
        .table-container {
            margin-top: 10px;
            /* Adjust this value as needed */
        }

        table {
            max-width: 100%;
            /* Adjust the max-width for responsiveness */
        }
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