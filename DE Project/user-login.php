<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
        <link rel="icon" href="logo2.png" type="image/x-icon">
        <link rel="stylesheet" href="login-page-style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
        <script src="JS.js"></script>
</head>

<body style="background-image: linear-gradient(to top right, #ff66ff 0%, #3399ff 100%);">
        <div class="main">
                <form name="frm1" action="userlogin-data.php" onsubmit="return check()">
                        <div class="row">
                                <div class="col-sm-5" id="bord1">
                                        <img src="login_pic.png">
                                </div>
                                <div class="col-sm-7" id="bord2" style="background-color:#EFEFEF">
                                        <div class="line3a">USER LOGIN</div>
                                        <br>
                                        <div class="line3b">Use your username to LOGIN</div>
                                        <br>
                                        <input id="inpt" type="text" name="name" class="form-control" placeholder="username" aria-describedby="basic-addon1"><br>
                                        <input id="inpt" type="text" name="password" class="form-control" placeholder="password"  aria-describedby="basic-addon1"><br>
                                        <input class="sbmt" type="submit" value="LOGIN ">
                                </div>
                        </div>
                </form>
        </div>
</body>

</html>