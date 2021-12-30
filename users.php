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
                    <div class="card-header p-2">
                        <a href="profil?profil=<?= $_SESSION['unique_id'];?>"
                            class="d-flex justify-content-between align-item-center">
                            <span>
                                <img src="./images/<?= $row['img'];?>" alt="<?= $row['username'];?>" class="img-avatar">
                            </span>
                            <span>
                                <?= $row['username'];?>
                            </span>
                        </a>
                    </div>
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