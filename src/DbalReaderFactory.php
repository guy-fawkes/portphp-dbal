<?php

namespace Port\Dbal;

use Doctrine\DBAL\Connection;
use Port\Reader\ReaderFactory;

/**
 * Factory that creates DbalReaders
 *
 * @author David de Boer <david@ddeboer.nl>
 */
class DbalReaderFactory implements ReaderFactory
{
    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param string $sql
     * @param array  $params
     *
     * @return DbalReader
     */
    public function getReader($sql, array $params = [])
    {
        return new DbalReader($this->connection, $sql, $params);
    }
}
