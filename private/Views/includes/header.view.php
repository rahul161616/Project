<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <!-- <meta name="keywords" content="HTML, CSS, JavaScript"> -->
    <!-- <meta name="author" content="John Doe"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='<?= ROOT ?>/Assets/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?= ROOT ?>/Assets/all.min.css'>

</head>

<body>
    <?php if(isset($_COOKIE['msg'])){?>
    <div class="alert alert-danger w-25" role="alert">
        <?php
        echo $_COOKIE['msg'] ?? "";
        ?>
    </div>
    <?php }?>   


    <div style="min-width: 350px;padding:10px;">