<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | UrbanRead</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <style>
        .logo {
            height: 70px;
            width: 70px;
            object-fit: contain;
        }

        #footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- First child -->
        <nav class="navbar navbar-expand-lg navbar-dark text-white bg-dark">

            <img src="images/logo.png" class="logo mx-2"></img>
            <h5>UrbanRead Library Management System</h5>

        </nav>

    </div>
    <center>
        <h2 class="text-center mt-5">Register Here!</h2>
    </center>
    <div class="card mt-3 mb-5 w-50 mx-auto">
        <div class="card-body">
            <form method="post" id="frm1">
                <div class="form-group  mt-3">
                    <input type="text" name="txt_name" placeholder="Please Enter Your Name" class="form-control"
                        required>
                </div>

                <div class="form-group  mt-3">
                    <input type="text" name="txt_email" placeholder="Please Enter Your Email" class="form-control"
                        required>
                </div>

                <div class="form-group  mt-3">
                    <input type="text" name="txt_number" placeholder="Please Enter Your Number" class="form-control"
                        required>
                </div>

                <div class="form-group mt-3">
                    <input type="password" name="txt_password" placeholder="Please Enter Your Password"
                        class="form-control" id="yourPassword" required>
                </div>

                <div class="form-group mt-3">
                    <input type="password" name="txt_password" placeholder="Please Confirm Your Password"
                        class="form-control" id="yourPassword" required>
                </div>

                <div class="form-group mt-3">
                    <button class="btn btn-dark" type="submit" name="log">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="text-light bg-dark p-2 pt-3 text-center" id="footer">
        <p>Copyright&#169; 2023 Discover Literary Treasures at UrbanRead.com, All Rights Reserved | Designed By
            : <a href="https://www.linkedin.com/in/anandnbarai/" style="text-decoration: none; color: white;"> Anand
                Barai</a></p>
    </div>
</body>

</html>