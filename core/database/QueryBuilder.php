<?php

class QueryBuilder
{
    protected $pdo;
    protected $user;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from $table ORDER BY time desc");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectAllWithTableJoin($table, $tableToBeJoined)
    {
        $statement = $this->pdo->prepare("SELECT {$tableToBeJoined}.id as {$tableToBeJoined}_id, {$tableToBeJoined}.* , {$table}.*
FROM {$table}
    RIGHT JOIN {$tableToBeJoined}
         ON {$tableToBeJoined}.{$table}_id = {$table}.id 
   ORDER BY {$tableToBeJoined}.id DESC");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }


    public function storeUser($user)
    {
        $statement = $this->pdo->prepare("INSERT INTO users (name, password) VALUES ('{$user['name']}', '{$user['password']}')");
        $statement->execute();
    }

    public function selectUser($name)
    {
        $statement = $this->pdo->prepare("select * from users where name = '{$name}' ORDER BY time desc LIMIT 1");
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_CLASS);
        foreach ($users as $user) {
            $this->user = $user;
        }
        return $this->user;
    }

    public function storePost($post, $user_id)
    {
        $statement = $this->pdo->prepare("INSERT INTO posts (users_id, subject, content) VALUES ('{$user_id}', '{$post['subject']}','{$post['content']}')");
        $statement->execute();
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
           users_id INT(10) NOT NULL ,
           subject VARCHAR (20) NOT NULL ,
           content VARCHAR(500) NOT NULL,
           time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
        echo $statement->execute();


        $statement = $this->pdo->prepare("create table comments(
            id INT(10) AUTO_INCREMENT PRIMARY KEY,
            posts_id INT NOT NULL,
            users_id INT NOT NULL,
            content VARCHAR(300) NOT NULL,
             time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
        echo $statement->execute();


        $statement = $this->pdo->prepare("create table likes(
            id INT(10) AUTO_INCREMENT PRIMARY KEY,
            posts_id INT NOT NULL,
            users_id INT NOT NULL,
            time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
        echo $statement->execute();


        $statement = $this->pdo->prepare("create table replies(
            id INT(10) AUTO_INCREMENT PRIMARY KEY,
            comments_id INT NOT NULL,
            users_id INT NOT NULL,
            content VARCHAR(255) NOT NULL,
            time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
        echo $statement->execute();

    }

}

?>