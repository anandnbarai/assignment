<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Even Number</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-color: cadetblue;
        }
        .number {
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 10px;
			width: 20%;
			
        }
        input
        {
            border-radius: 5px;
            border: 1px solid #ccc; 
        }
    </style>
</head>
<body>
    <center>
        <br><br>
        <h3> Enter Number and know whether The Number is Odd or Even.</h3>
        <br>
        <form method="post">
            Enter a number : <input class="number" type="number" name="number" value="number" placeholder="Enter Number" id="number" required />
            <br>
            <input type="submit" name="submit" value="Submit" />
        </form>
       
        <?php
        if (isset($_POST['submit'])) 
        {
            $number = $_POST['number'];
            $arr = ["<b>$number is Even number.</b>", "<b>$number is Odd number.</b>"];
            echo ($arr[$number % 2]);
        }
        ?>
    </center>
</body>
</html>



