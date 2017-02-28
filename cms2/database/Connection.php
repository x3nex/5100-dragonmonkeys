<?php

class Connection {

    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=tasks-cms', 'homestead', 'secret');
        } catch(PDOException $exception) {
            die("Connection failed. Reason: " . $exception->getMessage());
        }
    }

}


