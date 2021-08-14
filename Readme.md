# welcome to chatApp 
## this app should work in every browsers. 
### We use html, css, bootstrap, and javascript to make this awesome app
---
[HTML]("www.w3schools.com/html", "Visite the link")
[CSS]("www.w3schools.com/html", "Visite the link")
[BOOTSTRAP]("www.w3schools.com/html", "Visite the link")
[JAVASCRIPT/JQUERY]("www.w3schools.com/html", "Visite the link")
# Database ./backend/table.config.sql
```sql
CREATE TABLE `crudajax`.`chat` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `massage` TEXT NOT NULL , `from` VARCHAR(255) NOT NULL , 
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`id`
)) ENGINE = InnoDB;
```

### You have to import into your SQL databases. the file is already created for you
### And open your index.html into any browser
