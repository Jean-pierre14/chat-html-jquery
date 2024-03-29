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
                    <div class="card-body" class="form-data">
                        <h3 class="text-center">Registration</h3>
                        <div id="error"></div>
                        <form action="" method="post" enctype="multipart/form-data" class="form-data">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" placeholder="Username" id="username"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail*</label>
                                <input type="email" placeholder="Email@congo.cd" name="email" id="email"
                                    class="form-control">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="password">Password *</label>
                                    <input type="password" name="password" placeholder="Password*" id="password"
                                        class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="password2">Confirm Password *</label>
                                    <input type="password" name="cpassword" placeholder="Password*" id="password2"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="img">Profil Picture</label>
                                <input type="file" name="file" id="img" class="form-control">
                            </div>
                            <div class="form-group btn-submit">
                                <button type="submit" id="register"
                                    class="btn btn-sm btn-block btn-success btn-php">Create an
                                    account</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="card card-body mt-2">
                    <p class="text-center">I have an<a href="login" class="btn btn-link">account</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./js/sign.js"></script>

</html>