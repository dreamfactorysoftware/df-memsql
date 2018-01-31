<?php

namespace DreamFactory\Core\MemSql\Services;

use DreamFactory\Core\SqlDb\Services\MySqlDb;

/**
 * Class MemSqlDb
 *
 * @package DreamFactory\Core\SqlDb\Services
 */
class MemSqlDb extends MySqlDb
{
    public static function getDriverName()
    {
        return 'memsql';
    }
}