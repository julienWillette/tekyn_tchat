<?php

namespace models;

require_once '../../db.php';

use \PDO;

class UsersModel
{

    private $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=". HOST .";dbname=". DBNAME, USER, PASSWORD);
    }

    public function getAll(): array
    {

        $usersBdd = $this->connection->query('SELECT * FROM users ORDER BY username ASC');
        $users = $usersBdd->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }

    public function getOneById(int $id): array
    {
        $query = 'SELECT * FROM users WHERE id=:id';
        $usersBdd = $this->connection->prepare($query);
        $usersBdd->bindValue(':id', $id, PDO::PARAM_INT);
        $usersBdd->execute();

        $user = $usersBdd->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    public function saveUser(array $user) :int
    {
        $usersBdd = $this->connection->prepare("INSERT INTO users (username, firstname, lastname, picture) VALUES (:username, :firstname, :lastname; :picture)");
        $usersBdd->bindValue(':username', $user['username'], PDO::PARAM_STR);
        $usersBdd->bindValue(':firstname', $user['firstname'], PDO::PARAM_STR);
        $usersBdd->bindValue(':lastname', $user['lastname'], PDO::PARAM_STR);
        $usersBdd->bindValue(':picture', $user['picture'], PDO::PARAM_STR);
        $usersBdd->execute();
        $lastId = $this->connection->lastInsertId();

        return $lastId;
    }

    public function editUser(array $user): void
    {
        $usersBdd = $this->connection->prepare("UPDATE users SET username=:username, firstname=:firstname, lastname=:lastname, picture=:picture WHERE id=:id");
        $usersBdd->bindValue(':id', $user['id'], PDO::PARAM_INT);
        $usersBdd->bindValue(':username', $user['username'], PDO::PARAM_STR);
        $usersBdd->bindValue(':firstname', $user['firstname'], PDO::PARAM_STR);
        $usersBdd->bindValue(':lastname', $user['lastname'], PDO::PARAM_STR);
        $usersBdd->bindValue(':picture', $user['picture'], PDO::PARAM_STR);
        $usersBdd->execute();
    }

    public function deleteUser(int $id): void
    {
        $usersBdd = $this->connection->prepare('DELETE FROM users WHERE id=:id');
        $usersBdd->bindValue(':id', $id, PDO::PARAM_INT);
        $usersBdd->execute();
    }
}

