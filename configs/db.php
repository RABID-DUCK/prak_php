<?php
include_once('../DB.php');
    $name_column = '';
    $type_column = '';
    function CreateTable($name_table){
        $commands = ["CREATE TABLE IF NOT EXISTS $name_table(
    id PRIMARY KEY,
    this->name_column this->type_column NOT NULL
)"];
        DB::$conn->exec($commands);
    }
