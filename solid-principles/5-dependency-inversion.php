<?php

/**
 * This principle states that high-level modules should not depend on low-level modules
 */

interface Database
{
    public function query($sql);
}

class MySQLDatabase implements Database
{
    public function query($sql)
    {
        // Code to execute a query using MySQL
    }
}

class UserController
{
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getUser($userId)
    {
        // Code to fetch user data using $this->database
    }
}
