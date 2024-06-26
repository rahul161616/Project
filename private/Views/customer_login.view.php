<style>
    * {
        margin: 0;
        padding: 0;
    }


    body {
        background-image: url("<?php echo ROOT; ?>/Assets/background.jpg");
        background-size: 150%;
    }

    .container {
        display: flex;
        align-items: center;
        height: 100vh;
        justify-content: center;
    }

    .login {
        background: linear-gradient(45deg, #37383C, rgb(62, 54, 91));
        opacity: 90%;
        box-shadow: 0 0 10px #000;
        padding: 80px 50px;
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border-radius: 20px;
    }

    button {

        margin: 10px 20px;
        padding: 10px 40px;
        display: inline-block;


        font-size: 1.5rem;
        text-decoration: none;
        color: rgb(58, 199, 207);
        background-color: black;

        font-weight: 500;

    }


    a {
        text-decoration: none;
        color: rgb(58, 199, 207);

    }


    label {
        font-size: 1.5rem;
        font-weight: 400;
    }


    input {
        border: none;
        appearance: none;
        outline: none;

        border-bottom: .2rem solid #ba933f;

        border-radius: .2em .2em 0 0;
        padding: .4em;
        color: #060405;
        padding: 10px;
        margin: 10px;
    }

    .password {
        margin-left: 5px;
    }

    button:hover {
        border: 3px solid rgb(58, 199, 207);
        transition: 0.7s;

    }

    input:hover {
        border: 3px solid black;
        transition: 0.7s;

    }
</style>

<body>
    <div class="container">
        <div class="login">
            <form method="POST" action="Customer_login">
                <h1> Customer Login</h1>
                <div class="main">
                    <!-- <label class="username" for="username">Username:</label>
                    <input type="name" placeholder="" name="Aname">
                    <br> -->
                    <label class="text" for="customer_code">Enter Code:</label>
                    <input type="text" name="customer_code">
                </div>
                <button type="submit" name="Customerlogin">Log In</button>
                <button class="returnHome"><a href="<?= ROOT ?>/home">Home</a></button>
            </form>
        </div>
    </div> 
</body>

</html>