<!DOCTYPE html>
<html>

<head>
    <title>Feedback Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="email"],
        textarea {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: orange;
            /* changed from #4CAF50 */
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            width: 48%;
            margin-right: 4%;
        }

        input[type="submit"]:hover {
            background-color: #ff8c00;
            /* added hover color */
        }

        a {
            background-color: green;
            /* changed from orange */
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            width: 48%;
            text-align: center;
            text-decoration: none;
        }

        a:hover {
            background-color: #008000;
            /* added hover color */
        }
    </style>
</head>

<body>
    <!-- Feedback Form -->
    <form method="POST" action="Submit_feedback">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback" required></textarea>
        <br><br>
        <input type="submit" name="" value="Submit Feedback">
        <a href="<?= ROOT ?>/Home" style="width: 48%; background-color: green;">Go back to home</a>
    </form>
</body>

</html>