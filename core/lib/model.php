<?php


namespace core\lib;


class model extends \PDO
{
    /**
     * $dsn, $username = null, $passwd = null, $options = null
     * model constructor.
     */
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=blog';
        $username = 'root';
        $passwd = '';
        try {
            parent::__construct($dsn, $username, $passwd);
        }catch (\PDOException $exception) {
            throw new \Exception($exception->getMessage());
        }

    }
}
