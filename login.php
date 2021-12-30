<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link rel="shortcut icon" href="https://avatars.githubusercontent.com/u/58594917?v=4" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/lightbox.min.css">
    <link rel="stylesheet" href="./css/progress.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Login</h3>
                        <div id="error"></div>
                        <form action="" method="post" id="form">
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="hidden" name="action" value="login" class="form-control">
                                <input type="email" name="email" placeholder="Email" id="email"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Password*" id="password"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="button" id="register"
                                    class="btn btn-sm btn-block btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card card-body mt-2 p-2">
                    <p class="text-center">I have an<a href="index.html" class="btn btn-link">account</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./js/jquery-3.4.0.min.js"></script>
<script src="./js/fontawesome.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/lightbox-plus-jquery.min.js"></script>
<script src="./js/signin.js"></script>

</html>