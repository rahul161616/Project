<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Style for the sidebar */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
        }

        /* Style for the sidebar links */
        .sidebar a {
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
        }

        /* Style for the sidebar links on hover */
        .sidebar a:hover {
            background-color: #555;
        }

        /* Style for the "Logout" link */
        .logout-link {
            position: absolute;
            bottom: 20px;
            left: 25px;
        }

        /* Style for the content */
        .content {
            margin-left: 260px;
            /* Adjust this value to match the sidebar width */
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <a href="#">Home</a>
        <a href="<?= ROOT ?>/Admin_order_lookpage">Orders</a>
        <a href="#">Staffs</a>
        <a href="<?= ROOT ?>/Admin_logout" class="logout-link">Logout</a>
    </div>

    <div class="content">
        <!-- Your main content goes here -->
        <h1>Welcome to the Dashboard</h1>
        <p>This is where you can manage your home, orders, and staffs.</p>
    </div>

</body>

</html>