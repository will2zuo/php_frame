<?php


namespace core\lib;


class model extends \Medoo\Medoo
{
    /**
     * $dsn, $username = null, $passwd = null, $options = null
     * model constructor.
     */
    public function __construct()
    {
        $option = conf::all('databases');
        parent::__construct($option);
    }
}
