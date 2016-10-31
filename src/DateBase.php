<?php

namespace Vendor\Moduls;

abstract class DateBase
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @param string
     */
    abstract public function selectDB();

    /**
     * @param string $host,$user,$password,$dbName
     */
    public function connectBD($host, $user, $password, $dbName)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbName = $dbName;

    //Connect to mysql database
    }
}
