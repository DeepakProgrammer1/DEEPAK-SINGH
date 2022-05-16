<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col md-6 offset-md-3">
                <form action="./check.php" class="form" method="POST">
                    <div class="row">
                        <div class="col mt-2">
                            <label for="username">Username</label>
                            <input type="text" placeholder="Username" name="uname" id="username">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="password">Password</label>
                            <input type="password" class="from-control mt-2" name="pwd" placeholder="Password" id="password">
                        </div>
                    </div>

                    <div class="col-"></div>

                    <div class="row mt-2 text-center">
                        <div class="col-md-4 ">
                            <button type="submit" class="btn btn-success">Login</button>
                            <button type="reset" class="btn btn-danger">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>