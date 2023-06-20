<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Age Checker</title>
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
        <h3>Enter Your Age to check Voting Eligibility for upcoming Election</h3>
        <br>
        <form method="post">
            Enter First Number : <input class="number" type="number" name="n1" value="n1" placeholder="Enter First Number" required />
            <br>
            Enter Second Number : <input class="number" type="number" name="n2" value="n2" placeholder="Enter Second Number" required />
            <br>
            Enter Third Number : <input class="number" type="number" name="n3" value="n3" placeholder="Enter Third Number" required />
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        

        if(isset($_POST["submit"]))
        {
            $n1 = $_POST["n1"]; 
            $n2 = $_POST["n2"]; 
            $n3 = $_POST["n3"]; 


            $n = ($n1 > $n2) ? (($n1 > $n3) ? "<b>$n1 is the Largest Number.</b>" : "<b>$n3 is the Largest Number</b>") : (($n2 > $n3) ? "<b>$n2 is the Largest Number.</b>" : "<b>$n3 is the Largest Number.</b>");

            echo $n;

            
        }
        ?>

    </center>
</body>
</html>