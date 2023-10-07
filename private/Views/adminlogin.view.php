<!-- <?php //show($_SESSION); 
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Views/includes/login.view.css">
</head>

<style>
    .container {
        display: flex;
        align-items: center;
        height: 100vh;
        justify-content: center;
    }

    .login {
        background: linear-gradient(45deg, rgb(180, 220, 231), rgb(238, 236, 245));
        padding: 80px 50px;
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border-radius: 20px;
    }

    button {

        margin: 10px 20px;
        padding: 10px 40px;
        display: inline-block;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

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
</style>

<body>

    <div class="container">
        <div class="login">
            <form method="POST" action="Adminlogin">
                <h1> Admin Login</h1>
                <div class="main">
                    <label class="username" for="admin_name">Username:</label>
                    <input type="text" placeholder="" name="admin_name">
                    <br>
                    <label class="password" for="admin_password">Password:</label>
                    <input type="password" name="admin_password">
                </div>
                <button type="submit" name="login">Log In</button>
                <button class="returnHome"><a href="<?= ROOT ?>/home">Home</a></button>
            </form>
        </div>
    </div>



</body>

</html>