<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
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
        <h3> Enter a Number to Know whether the Number is Armstrong or Not!</h3>
        <br>
        <form method="post">

            Enter the Number : <input class="number" type="number" name="number" value="number"
                placeholder="Enter a Number" required />
            <br>
            <input type="submit" value="Submit" name="submit">
        </form>

        <?php

        if (isset($_POST["submit"]))
        {
            $num = $_POST["number"]; 
            $total = 0;
            $x = $num;
            while ($x != 0)
            {
                $rem = $x % 10;
                $total = $total + $rem * $rem * $rem;
                $x = $x / 10;
            }
            if ($num == $total) 
            {
                echo "<b>Yes it is an Armstrong number</b>";
            }    
            else 
            {
                echo "<b>No it is not an armstrong number</b>";
            }
        }
        
        echo "<br><br><b><i>Note : An Armstrong number (also known as a narcissistic number or a pluperfect digital invariant) is a number<br> that is equal to the sum of its own digits raised to the power of the number of digits.</i></b>"
        ?>
    </center>

</body>

</html>
