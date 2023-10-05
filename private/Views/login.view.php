

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Views/includes/login.view.css">
</head>

<style>
    


.container{
    display: flex;
    align-items: center;
    height: 100vh;
    justify-content: center;
}

.login{
    background: linear-gradient(45deg,rgb(180, 220, 231), rgb(238, 236, 245));
    padding: 80px 50px;
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border-radius: 20px;
}

button{
   
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
    

a{
    text-decoration: none;
    color: rgb(58, 199, 207);
    
}


label{
    font-size: 1.5rem;
    font-weight: 400;
}


input{
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

.password{
    margin-left: 5px;
}
</style>

<body>
    <div class="container">
        <div class="login">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <h1> Admin Login</h1>
                <div class="main">
                    <label class="username" for="username">Username:</label>
                    <input type="name" placeholder="" name="Aname">
                    <br>
                    <label class="password" for="password">Password:</label>
                    <input type="password" name="Apass">
                </div>
                <button type="submit" name="Admin_login">Log In</button>
                <button class="returnHome"><a href="<?= ROOT ?>/mainhome">Home</a></button>
            </form>
        </div>
    </div>


    <?php
    function input_filter($data)
    {
        $data = trim($data); //trimming the data removing extra white spaces
        $data = stripslashes($data); //stripslashes removes backslashes
        $data = htmlspecialchars($data); //htmlspecialchars converts special characters to html entities
        return $data;
    }
    if (isset($_POST['Admin_login'])) {
        $admin_name = $_POST['Aname'];
        $admin_name = input_filter($admin_name);
        $admin_pass = $_POST['Apass'];
        $admin_pass = input_filter($admin_pass);
        $admin_name = mysqli_real_escape_string($con, $admin_name); //mysqli_real_escape_string escapes special characters in a string for use in an SQL statement (SQL injection)    
        $admin_pass = mysqli_real_escape_string($con, $admin_pass); //mysqli_real_escape_string escapes special characters in a string for use in an SQL statement (SQL injection)

        $query = "SELECT * FROM `admin_panel` WHERE `admin_name` = ? AND `admin_pass` = ?";
        if (mysqli_prepare($con, $query)) {
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "ss", $admin_name, $admin_pass);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
                session_start();
                $_SESSION['admin_names'] = $admin_name;
                header("location: admindash.php");
                // header("Location: adminpanel.php");
            } else {
                echo "Login Failed";
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Failed to prepare statement";
        }


        // echo "Hello";
    }
    ?>

</body>

</html>