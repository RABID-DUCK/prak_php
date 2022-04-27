<?php
class DB{

    protected function connection(){
        $basa = Config::SettingsDeveloper('db');
        $conn = new PDO("mysql:host={$basa['host']};dbname={$basa['dbname']}", $basa['user'], $basa['password']);
    }
    protected function  __construct()
    {
        $this->connection();
    }
}
