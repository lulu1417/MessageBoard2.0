<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    { $statement = $this->pdo->prepare("select * from $table ORDER BY time desc");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function createStatement()
    {

        $statement = $this->pdo->prepare("create table users(
            id INT(10) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(20) NOT NULL,
            password VARCHAR(20) NOT NULL,
            time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
        echo $statement->execute();


        $statement = $this->pdo->prepare("create table posts(
            id INT(10) AUTO_INCREMENT PRIMARY KEY,
           user_id INT(10) NOT NULL ,
           subject VARCHAR (20) NOT NULL ,
            content VARCHAR(500) NOT NULL,
           time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
        echo $statement->execute();


        $statement = $this->pdo->prepare("create table comments(
            id INT(10) AUTO_INCREMENT PRIMARY KEY,
            post_id INT NOT NULL,
            FOREIGN KEY (post_id) REFERENCES posts(id),
            user_id INT NOT NULL,
            FOREIGN KEY (user_id) REFERENCES users(id),
            content VARCHAR(300) NOT NULL,
             time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
        echo $statement->execute();


        $statement = $this->pdo->prepare("create table likes(
            id INT(10) AUTO_INCREMENT PRIMARY KEY,
            post_id INT NOT NULL,
            FOREIGN KEY (post_id) REFERENCES posts(id),
            user_id INT NOT NULL,
            FOREIGN KEY (user_id) REFERENCES users(id),
            time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
        echo $statement->execute();


        $statement = $this->pdo->prepare("create table replies(
            id INT(10) AUTO_INCREMENT PRIMARY KEY,
            comment_id INT NOT NULL,
            FOREIGN KEY (comment_id) REFERENCES comments(id),
            user_id INT NOT NULL,
            FOREIGN KEY (user_id) REFERENCES users(id),
            content VARCHAR(255) NOT NULL,
            time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
        echo $statement->execute();

    }

}
?>