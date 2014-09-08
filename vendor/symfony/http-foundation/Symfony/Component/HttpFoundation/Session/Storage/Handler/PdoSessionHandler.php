<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage\Handler;

/**
 * PdoSessionHandler.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Michael Williams <michael.williams@funsational.com>
<<<<<<< HEAD
 * @author Tobias Schultze <http://tobion.de>
=======
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
 */
class PdoSessionHandler implements \SessionHandlerInterface
{
    /**
<<<<<<< HEAD
     * @var \PDO PDO instance
=======
     * @var \PDO PDO instance.
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    private $pdo;

    /**
<<<<<<< HEAD
     * @var string Table name
     */
    private $table;

    /**
     * @var string Column for session id
     */
    private $idCol;

    /**
     * @var string Column for session data
     */
    private $dataCol;

    /**
     * @var string Column for timestamp
     */
    private $timeCol;
=======
     * @var array Database options.
     */
    private $dbOptions;
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887

    /**
     * Constructor.
     *
     * List of available options:
     *  * db_table: The name of the table [required]
     *  * db_id_col: The column where to store the session id [default: sess_id]
     *  * db_data_col: The column where to store the session data [default: sess_data]
     *  * db_time_col: The column where to store the timestamp [default: sess_time]
     *
     * @param \PDO  $pdo       A \PDO instance
     * @param array $dbOptions An associative array of DB options
     *
     * @throws \InvalidArgumentException When "db_table" option is not provided
     */
    public function __construct(\PDO $pdo, array $dbOptions = array())
    {
        if (!array_key_exists('db_table', $dbOptions)) {
            throw new \InvalidArgumentException('You must provide the "db_table" option for a PdoSessionStorage.');
        }
        if (\PDO::ERRMODE_EXCEPTION !== $pdo->getAttribute(\PDO::ATTR_ERRMODE)) {
            throw new \InvalidArgumentException(sprintf('"%s" requires PDO error mode attribute be set to throw Exceptions (i.e. $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION))', __CLASS__));
        }
        $this->pdo = $pdo;
<<<<<<< HEAD
        $dbOptions = array_merge(array(
=======
        $this->dbOptions = array_merge(array(
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
            'db_id_col'   => 'sess_id',
            'db_data_col' => 'sess_data',
            'db_time_col' => 'sess_time',
        ), $dbOptions);
<<<<<<< HEAD

        $this->table = $dbOptions['db_table'];
        $this->idCol = $dbOptions['db_id_col'];
        $this->dataCol = $dbOptions['db_data_col'];
        $this->timeCol = $dbOptions['db_time_col'];
    }

    /**
     * {@inheritdoc}
     */
    public function open($savePath, $sessionName)
=======
    }

    /**
     * {@inheritDoc}
     */
    public function open($path, $name)
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
    {
        return true;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function close()
    {
        return true;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
     */
    public function destroy($sessionId)
    {
        // delete the record associated with this id
        $sql = "DELETE FROM $this->table WHERE $this->idCol = :id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $sessionId, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \RuntimeException(sprintf('PDOException was thrown when trying to delete a session: %s', $e->getMessage()), 0, $e);
=======
     * {@inheritDoc}
     */
    public function destroy($id)
    {
        // get table/column
        $dbTable = $this->dbOptions['db_table'];
        $dbIdCol = $this->dbOptions['db_id_col'];

        // delete the record associated with this id
        $sql = "DELETE FROM $dbTable WHERE $dbIdCol = :id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \RuntimeException(sprintf('PDOException was thrown when trying to manipulate session data: %s', $e->getMessage()), 0, $e);
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        }

        return true;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
     */
    public function gc($maxlifetime)
    {
        // delete the session records that have expired
        $sql = "DELETE FROM $this->table WHERE $this->timeCol < :time";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':time', time() - $maxlifetime, \PDO::PARAM_INT);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \RuntimeException(sprintf('PDOException was thrown when trying to delete expired sessions: %s', $e->getMessage()), 0, $e);
=======
     * {@inheritDoc}
     */
    public function gc($lifetime)
    {
        // get table/column
        $dbTable   = $this->dbOptions['db_table'];
        $dbTimeCol = $this->dbOptions['db_time_col'];

        // delete the session records that have expired
        $sql = "DELETE FROM $dbTable WHERE $dbTimeCol < :time";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':time', time() - $lifetime, \PDO::PARAM_INT);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \RuntimeException(sprintf('PDOException was thrown when trying to manipulate session data: %s', $e->getMessage()), 0, $e);
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        }

        return true;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
     */
    public function read($sessionId)
    {
        $sql = "SELECT $this->dataCol FROM $this->table WHERE $this->idCol = :id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $sessionId, \PDO::PARAM_STR);
            $stmt->execute();

            // We use fetchAll instead of fetchColumn to make sure the DB cursor gets closed
            $sessionRows = $stmt->fetchAll(\PDO::FETCH_NUM);

            if ($sessionRows) {
                return base64_decode($sessionRows[0][0]);
            }

=======
     * {@inheritDoc}
     */
    public function read($id)
    {
        // get table/columns
        $dbTable   = $this->dbOptions['db_table'];
        $dbDataCol = $this->dbOptions['db_data_col'];
        $dbIdCol   = $this->dbOptions['db_id_col'];

        try {
            $sql = "SELECT $dbDataCol FROM $dbTable WHERE $dbIdCol = :id";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id, \PDO::PARAM_STR);

            $stmt->execute();
            // it is recommended to use fetchAll so that PDO can close the DB cursor
            // we anyway expect either no rows, or one row with one column. fetchColumn, seems to be buggy #4777
            $sessionRows = $stmt->fetchAll(\PDO::FETCH_NUM);

            if (count($sessionRows) == 1) {
                return base64_decode($sessionRows[0][0]);
            }

            // session does not exist, create it
            $this->createNewSession($id);

>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
            return '';
        } catch (\PDOException $e) {
            throw new \RuntimeException(sprintf('PDOException was thrown when trying to read the session data: %s', $e->getMessage()), 0, $e);
        }
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
     */
    public function write($sessionId, $data)
    {
        // Session data can contain non binary safe characters so we need to encode it.
        $encoded = base64_encode($data);

        // We use a MERGE SQL query when supported by the database.
        // Otherwise we have to use a transactional DELETE followed by INSERT to prevent duplicate entries under high concurrency.

        try {
            $mergeSql = $this->getMergeSql();

            if (null !== $mergeSql) {
                $mergeStmt = $this->pdo->prepare($mergeSql);
                $mergeStmt->bindParam(':id', $sessionId, \PDO::PARAM_STR);
                $mergeStmt->bindParam(':data', $encoded, \PDO::PARAM_STR);
                $mergeStmt->bindValue(':time', time(), \PDO::PARAM_INT);
                $mergeStmt->execute();

                return true;
            }

            $this->pdo->beginTransaction();

            try {
                $deleteStmt = $this->pdo->prepare(
                    "DELETE FROM $this->table WHERE $this->idCol = :id"
                );
                $deleteStmt->bindParam(':id', $sessionId, \PDO::PARAM_STR);
                $deleteStmt->execute();

                $insertStmt = $this->pdo->prepare(
                    "INSERT INTO $this->table ($this->idCol, $this->dataCol, $this->timeCol) VALUES (:id, :data, :time)"
                );
                $insertStmt->bindParam(':id', $sessionId, \PDO::PARAM_STR);
                $insertStmt->bindParam(':data', $encoded, \PDO::PARAM_STR);
                $insertStmt->bindValue(':time', time(), \PDO::PARAM_INT);
                $insertStmt->execute();

                $this->pdo->commit();
            } catch (\PDOException $e) {
                $this->pdo->rollback();

                throw $e;
            }
        } catch (\PDOException $e) {
            throw new \RuntimeException(sprintf('PDOException was thrown when trying to write the session data: %s', $e->getMessage()), 0, $e);
=======
     * {@inheritDoc}
     */
    public function write($id, $data)
    {
        // get table/column
        $dbTable   = $this->dbOptions['db_table'];
        $dbDataCol = $this->dbOptions['db_data_col'];
        $dbIdCol   = $this->dbOptions['db_id_col'];
        $dbTimeCol = $this->dbOptions['db_time_col'];

        //session data can contain non binary safe characters so we need to encode it
        $encoded = base64_encode($data);

        try {
            $driver = $this->pdo->getAttribute(\PDO::ATTR_DRIVER_NAME);

            if ('mysql' === $driver) {
                // MySQL would report $stmt->rowCount() = 0 on UPDATE when the data is left unchanged
                // it could result in calling createNewSession() whereas the session already exists in
                // the DB which would fail as the id is unique
                $stmt = $this->pdo->prepare(
                    "INSERT INTO $dbTable ($dbIdCol, $dbDataCol, $dbTimeCol) VALUES (:id, :data, :time) " .
                    "ON DUPLICATE KEY UPDATE $dbDataCol = VALUES($dbDataCol), $dbTimeCol = VALUES($dbTimeCol)"
                );
                $stmt->bindParam(':id', $id, \PDO::PARAM_STR);
                $stmt->bindParam(':data', $encoded, \PDO::PARAM_STR);
                $stmt->bindValue(':time', time(), \PDO::PARAM_INT);
                $stmt->execute();
            } elseif ('oci' === $driver) {
                $stmt = $this->pdo->prepare("MERGE INTO $dbTable USING DUAL ON($dbIdCol = :id) ".
                       "WHEN NOT MATCHED THEN INSERT ($dbIdCol, $dbDataCol, $dbTimeCol) VALUES (:id, :data, sysdate) " .
                       "WHEN MATCHED THEN UPDATE SET $dbDataCol = :data WHERE $dbIdCol = :id");

                $stmt->bindParam(':id', $id, \PDO::PARAM_STR);
                $stmt->bindParam(':data', $encoded, \PDO::PARAM_STR);
                $stmt->execute();
            } else {
                $stmt = $this->pdo->prepare("UPDATE $dbTable SET $dbDataCol = :data, $dbTimeCol = :time WHERE $dbIdCol = :id");
                $stmt->bindParam(':id', $id, \PDO::PARAM_STR);
                $stmt->bindParam(':data', $encoded, \PDO::PARAM_STR);
                $stmt->bindValue(':time', time(), \PDO::PARAM_INT);
                $stmt->execute();

                if (!$stmt->rowCount()) {
                    // No session exists in the database to update. This happens when we have called
                    // session_regenerate_id()
                    $this->createNewSession($id, $data);
                }
            }
        } catch (\PDOException $e) {
                throw new \RuntimeException(sprintf('PDOException was thrown when trying to write the session data: %s', $e->getMessage()), 0, $e);
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        }

        return true;
    }

    /**
<<<<<<< HEAD
     * Returns a merge/upsert (i.e. insert or update) SQL query when supported by the database.
     *
     * @return string|null The SQL string or null when not supported
     */
    private function getMergeSql()
    {
        $driver = $this->pdo->getAttribute(\PDO::ATTR_DRIVER_NAME);

        switch ($driver) {
            case 'mysql':
                return "INSERT INTO $this->table ($this->idCol, $this->dataCol, $this->timeCol) VALUES (:id, :data, :time) " .
                    "ON DUPLICATE KEY UPDATE $this->dataCol = VALUES($this->dataCol), $this->timeCol = VALUES($this->timeCol)";
            case 'oci':
                // DUAL is Oracle specific dummy table
                return "MERGE INTO $this->table USING DUAL ON ($this->idCol = :id) " .
                    "WHEN NOT MATCHED THEN INSERT ($this->idCol, $this->dataCol, $this->timeCol) VALUES (:id, :data, :time) " .
                    "WHEN MATCHED THEN UPDATE SET $this->dataCol = :data";
            case 'sqlsrv':
                // MS SQL Server requires MERGE be terminated by semicolon
                return "MERGE INTO $this->table USING (SELECT 'x' AS dummy) AS src ON ($this->idCol = :id) " .
                    "WHEN NOT MATCHED THEN INSERT ($this->idCol, $this->dataCol, $this->timeCol) VALUES (:id, :data, :time) " .
                    "WHEN MATCHED THEN UPDATE SET $this->dataCol = :data;";
            case 'sqlite':
                return "INSERT OR REPLACE INTO $this->table ($this->idCol, $this->dataCol, $this->timeCol) VALUES (:id, :data, :time)";
        }
=======
     * Creates a new session with the given $id and $data
     *
     * @param string $id
     * @param string $data
     *
     * @return boolean True.
     */
    private function createNewSession($id, $data = '')
    {
        // get table/column
        $dbTable   = $this->dbOptions['db_table'];
        $dbDataCol = $this->dbOptions['db_data_col'];
        $dbIdCol   = $this->dbOptions['db_id_col'];
        $dbTimeCol = $this->dbOptions['db_time_col'];

        $sql = "INSERT INTO $dbTable ($dbIdCol, $dbDataCol, $dbTimeCol) VALUES (:id, :data, :time)";

        //session data can contain non binary safe characters so we need to encode it
        $encoded = base64_encode($data);
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_STR);
        $stmt->bindParam(':data', $encoded, \PDO::PARAM_STR);
        $stmt->bindValue(':time', time(), \PDO::PARAM_INT);
        $stmt->execute();

        return true;
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
    }

    /**
     * Return a PDO instance
     *
     * @return \PDO
     */
    protected function getConnection()
    {
        return $this->pdo;
    }
}
