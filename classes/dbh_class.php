<?php
class Dbh{
    protected function connect(){
        try {
            $username = 'root';
            $password = '';
            $dbh = new PDO('mysql:host=localhost;dbname=titan_db', $username, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (\PDOException $th) {
            return $th->getMessage();
            die();
        }
    }
}


