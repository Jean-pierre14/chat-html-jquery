<?php include_once "header.php";?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12 mt-2">
                <div class="card">
                    <div class="card-header p-2">
                        <a href="profil?profil=<?= $row['unique_id'];?>"
                            class="d-flex justify-content-between align-item-center">
                            <span>
                                <img src="./images/<?= $row['img'];?>" alt="<?= $row['username'];?>" class="img-avatar">
                            </span>
                            <span>
                                <?= $row['username'];?>
                            </span>
                        </a>
                    </div>
                    <div class="card-body px-0">
                        <?php if(isset($_GET['message'])):?>
                        <h3>Messages</h3>
                        <?php else:?>
                        <div id="user-List">
                            <div class="list-group list-group-flush">
                                <a href="users?message=<?= $row['unique_id'];?>"
                                    class="list-group-item list-group-item-action d-flex justify-content-between align-item-center">
                                    <span>
                                        <img src="./images/<?= $row['img'];?>" alt="<?= $row['username'];?>"
                                            class="img-avatar">
                                    </span>
                                    <span>
                                        <?= $row['username'];?>
                                    </span>
                                    <small>
                                        <?= $row['status'];?>
                                    </small>
                                </a>

                                <a href="users?message=<?= $row['unique_id'];?>"
                                    class="list-group-item list-group-item-action d-flex justify-content-between align-item-center">
                                    <span>
                                        <img src="./images/<?= $row['img'];?>" alt="<?= $row['username'];?>"
                                            class="img-avatar">
                                    </span>
                                    <span>
                                        <?= $row['username'];?>
                                    </span>
                                    <small>
                                        <?= $row['status'];?>
                                    </small>
                                </a>

                                <a href="users?message=<?= $row['unique_id'];?>"
                                    class="list-group-item list-group-item-action d-flex justify-content-between align-item-center">
                                    <span>
                                        <img src="./images/<?= $row['img'];?>" alt="<?= $row['username'];?>"
                                            class="img-avatar">
                                    </span>
                                    <span>
                                        <?= $row['username'];?>
                                    </span>
                                    <small>
                                        <?= $row['status'];?>
                                    </small>
                                </a>
                            </div>
                        </div>
                        <?php endif;?>
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