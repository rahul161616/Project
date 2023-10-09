<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your head content here -->
</head>
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
        transition: background-color 0.3s;
        /* Add a transition effect for smoother color change */
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

    /* Style for the active link */
    .active {
        background-color: orange;
    }

    /* Style for the content */
    .content {
        margin-left: 260px;
        /* Adjust this value to match the sidebar width */
        padding: 20px;
    }
</style>

<body>
    <div class="sidebar">
        <a href="<?= ROOT ?>/Dashboard" id="home">Home</a>
        <a href="<?= ROOT ?>/Admin_order_lookpage" id="admin_order_lookpage">Orders</a>
        <a href="<?= ROOT ?>/Admin_logout" class="logout-link">Logout</a>
        <a href="<?= ROOT ?>/Admin_feedback_lookpage" id="admin_feedback_lookpage">FeedBack</a>
        <a href="<?= ROOT ?>/Additemsadmin">AddItems</a>
        <a href="<?= ROOT ?>/Addstaffs">Addstaffs</a>
    </div>

    <script>
        // Get all sidebar links
        const links = document.querySelectorAll('.sidebar a');

        // Add a click event listener to each link
        links.forEach(link => {
            link.addEventListener('click', () => {
                // Remove the "active" class from all links
                links.forEach(l => l.classList.remove('active'));

                // Add the "active" class to the clicked link
                link.classList.add('active');
            });
        });
    </script>
</body>

</html>