<?php
    $con = mysqli_connect("localhost", "root", "", "chat") or die("Cannot be connect to this DB");
    if(!$con){
        $tables_users = '
        CREATE TABLE `chat`.`users` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `unique_id` INT(400) NOT NULL , `username` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `img` VARCHAR(400) NOT NULL , `status` VARCHAR(50) NOT NULL , `password` VARCHAR(400) NOT NULL , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;
        ';
    }

?>