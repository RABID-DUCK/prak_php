<?php
class DB{
    protected static $user = 'root';
    protected static $pass = '';
    public function  __construct()
    {
        $conn = new PDO('mysql:host=localhost;dbname=aspro', DB::$user, DB::$pass);
    }
}
