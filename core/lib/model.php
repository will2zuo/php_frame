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
        $tmp = conf::all('databases');
        $dsn = $tmp['DSN'];
        $username = $tmp['USERNAME'];
        $passwd = $tmp['PASSWORD'];
        try {
            parent::__construct($dsn, $username, $passwd);
        }catch (\PDOException $exception) {
            throw new \Exception($exception->getMessage());
        }

    }
}
