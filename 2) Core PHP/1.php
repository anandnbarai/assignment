<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Mark</title>
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
        <h3> Enter Your Subject Marks (out of 100) and Know the Average Marks & Percentage.</h3>
        <br>
        <form method="post">
            <div>
                Enter Mark of Maths : <input class="number" type="number" value="maths" name="maths" max="100"
                    placeholder="Enter Mark of Maths" required />
                <br>
                Enter Mark of Physics : <input class="number" type="number" value="phy" name="phy" max="100"
                    placeholder="Enter Mark of Physics" required />
                <br>
                Enter Mark of Chemistry : <input class="number" type="number" value="che" name="che" max="100"
                    placeholder="Enter Mark of Chemistry" required />
                <br>
                Enter Mark of Biology : <input class="number" type="number" value="bio" name="bio" max="100"
                    placeholder="Enter Mark of Biology" required />
                <br>
                Enter Mark of Computer : <input class="number" type="number" value="comp" name="comp" max="100"
                    placeholder="Enter Mark of Computer" required />
                <br>
            </div>
            <input type="submit" value="submit" name="submit">
        </form>

        <?php

        if (isset($_POST["submit"])) {
            $maths = $_POST["maths"];
            $phy = $_POST["phy"];
            $che = $_POST["che"];
            $bio = $_POST["bio"];
            $comp = $_POST["comp"];
            $total = $maths + $phy + $che + $bio + $comp;
            $per = $total / 5;


            if ($per >= 80) {
                echo "<b>Congratulation You Score ".$per." Percentage and Your Grade is A.</b>";
            } elseif ($per >= 70) {
                echo "<b>Congratulation You Score ".$per." Percentage and Your Grade is B.</b>";
            } elseif ($per >= 60) {
                echo "<b>Congratulation You Score ".$per." Percentage and Your Grade is C.</b>";
            } elseif ($per >= 35) {
                echo "<b>Congratulation You Score ".$per." Percentage and Your Grade is D.</b>";
            } else {
                echo "<b>You failed in this Exam. Work Hard.</b>";
            }
        }

        ?>


    </center>
</body>

</html>