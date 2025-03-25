<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color:rgb(23, 31, 23);
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 15px 30px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

    </style>
    

</head>
<body>
    <h1>Click the Button to Generate Random Number</h1>
    <form method="POST">
        <button type="submit" name="generate">Generate Random Number</button>
    </form>

</body>
</html>
<?php

 $task = [23,56,78,45,78,345,67,89,43,21,4,56];
if (isset($_POST['generate'])) {
   
    $randomNumber = $task[array_rand($task)];
    echo "<p>Random Number: $randomNumber</p>";
}
?>
