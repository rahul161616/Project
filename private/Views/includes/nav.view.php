<!-- Add these lines to include Bootstrap's JavaScript, Popper.js, and jQuery -->


<style>
    nav {
        border-bottom: 3px solid rgb(208, 156, 93);
        margin-bottom: 10px;
        /* background-color: rgb(208, 156, 93);; */

    }

    .navbar-brand {
        font-size: 2rem;
        font-weight: 500;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        color: rgb(80, 36, 36);
    }

    .nav-item {
        font-size: 1.25rem;
        margin: 0 10px;
        color: brown;

    }

    .container-fluid {
        margin: 0px 30px;
        display: flex;
        justify-content: end;


    }

    .active {

        font-weight: 600;
    }

    ul {
        display: flex;
    }

    .nav-item:hover {
        font-size: 1.5rem;
        font-weight: 500;


    }

    .dropdown-item:hover {
        background-color: antiquewhite;
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/home">Home</a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/Item_menu">Menu</a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/Cart">My Items</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Drop For edit
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= ROOT ?>/Edit<?php if (isset($_SESSION['user'])) echo "?phone=" . $_SESSION['user'] ?>" id=" editButton">Edit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <!-- ... Your existing navbar content ... -->
    </nav>

</nav>