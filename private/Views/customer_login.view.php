



<style>
    *{
        margin: 0;
        padding: 0;
    }


body{
    margin: 0;
    padding: 0;
     background-image: url("<?php echo ROOT; ?>/Assets/customer_background.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
}

.container{
    display: flex;
    align-items: center;
    height: 100vh;
    justify-content: center;
}

.login{
     background: linear-gradient(45deg,#37383C, rgb(62, 54, 91));
    opacity: 90%;
    box-shadow: 0 0 10px #000;
    padding: 5% 3% 4%;
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border-radius: 20px;
}

button{
   
     margin: 10px 20px;
    padding: 10px 40px;
display: inline-block;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
border-radius: 10px;

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

button:hover{
    border: 3px solid rgb(58, 199, 207);
    transition: 0.7s;
    
}
input:hover{
    border: 3px solid black;
    transition: 0.7s;
    
}
</style>

<body>
    <div class="container">
        <div class="login">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <h1> Customer Login</h1>
                <div class="main">
                    <!-- <label class="username" for="username">Username:</label>
                    <input type="name" placeholder="" name="Aname">
                    <br> -->
                    <label class="password" for="password">Enter Code:</label>
                    <input type="password" name="Cpass">
                </div>
                <button type="submit" name="Customer_login">Log In</button>
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
    if (isset($_POST['Customer_login'])) {
       
        $customer_code = $_POST['Cpass'];
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