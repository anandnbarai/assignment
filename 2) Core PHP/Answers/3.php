<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: cadetblue;
        }

        .number {
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            width: 20%;

        }

        input {
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <center>
        <br><br>
        <h3> Enter Year to Know whether it's Leap Year or Not! </h3>
        <br>
        <form method="post">

            Enter Year : <input class="number" type="number" value="year" name="year" min="1901" max="2016" placeholder="Enter Year"
                required />
            <br>
            <input type="submit" name="submit" value="Submit" />
        </form>
    

    <?php

    if (isset($_POST["submit"])) 
    {
        $year = $_POST["year"];

        if (($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)) 
        {
            echo "<b>".$year . ' is a Leap Year.</b>';
        } else 
        {
            echo "<b>".$year . ' is not a Leap Year.</b>';
        }
    }

    ?>
    </center>
</body>

</html>