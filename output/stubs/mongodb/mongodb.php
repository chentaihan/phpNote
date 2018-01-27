<?php
namespace MongoDB {}
    namespace MongoDB\Driver {
        use MongoDB\BSON\Serializable;
        use MongoDB\Driver\Exception\AuthenticationException;
        use MongoDB\Driver\Exception\BulkWriteException;
        use MongoDB\Driver\Exception\ConnectionException;
        use MongoDB\Driver\Exception\DuplicateKeyException;
        use MongoDB\Driver\Exception\Exception;
        use MongoDB\Driver\Exception\InvalidArgumentException;
        use MongoDB\Driver\Exception\RuntimeException;
        use MongoDB\Driver\Exception\WriteConcernException;
        use MongoDB\Driver\Exception\WriteException;
        final class Manager
        {
            final public function __construct($uri, array $options = [], array $driverOptions = [])
            {
            }
            final public function executeBulkWrite($namespace, BulkWrite $bulk, WriteConcern $writeConcern = null)
            {
            }
            final public function executeCommand($db, Command $command, ReadPreference $readPreference = null)
            {
            }
            final public function executeQuery($namespace, Query $query, ReadPreference $readPreference = null)
            {
            }
            final public function getServers()
            {
            }
            final public function getReadConcern()
            {
            }
            final public function getReadPreference()
            {
            }
            final public function getWriteConcern()
            {
            }
            final public function selectServer(ReadPreference $readPreference = null)
            {
            }
        }
        final class Server
        {
            const TYPE_UNKNOWN = 0;
            const TYPE_STANDALONE = 1;
            const TYPE_MONGOS = 2;
            const TYPE_POSSIBLE_PRIMARY = 3;
            const TYPE_RS_PRIMARY = 4;
            const TYPE_RS_SECONDARY = 5;
            const TYPE_RS_ARBITER = 6;
            const TYPE_RS_OTHER = 7;
            const TYPE_RS_GHOST = 8;
            final private function __construct()
            {
            }
            final public function executeBulkWrite($namespace, BulkWrite $zwrite, WriteConcern $writeConcern = null)
            {
            }
            final public function executeCommand($db, Command $command, ReadPreference $readPreference = null)
            {
            }
            final public function executeQuery($namespace, Query $query, ReadPreference $readPreference = null)
            {
            }
            final public function getHost()
            {
            }
            final public function getInfo()
            {
            }
            final public function getLatency()
            {
            }
            final public function getPort()
            {
            }
            final public function getTags()
            {
            }
            final public function getType()
            {
            }
            final public function isArbiter()
            {
            }
            final public function isHidden()
            {
            }
            final public function isPassive()
            {
            }
            final public function isPrimary()
            {
            }
            final public function isSecondary()
            {
            }
        }
        final class Query
        {
            final public function __construct($filter, array $queryOptions = [])
            {
            }
        }
        final class Command
        {
            final public function __construct($document)
            {
            }
        }
        final class ReadPreference implements Serializable
        {
            const RP_PRIMARY = 1;
            const RP_PRIMARY_PREFERRED = 5;
            const RP_SECONDARY = 2;
            const RP_SECONDARY_PREFERRED = 6;
            const RP_NEAREST = 10;
            final public function __construct($mode, array $tagSets = [])
            {
            }
            final public function  getMode()
            {
            }
            final public function getTagSets()
            {
            }
            final public function bsonSerialize()
            {
            }
        }
        final class ReadConcern implements Serializable
        {
            const LINEARIZABLE = 'linearizable' ;
            const LOCAL = 'local' ;
            const MAJORITY = 'majority' ;
            final public function __construct($level = null)
            {
            }
            final public function getLevel()
            {
            }
            final public function bsonSerialize()
            {
            }
        }
        final class Cursor implements \Traversable
        {
            final private function __construct()
            {
            }
            final public function getId()
            {
            }
            final public function getServer()
            {
            }
            final public function isDead()
            {
            }
            final public function setTypeMap(array $typemap)
            {
            }
            final public function toArray()
            {
            }
        }
        final class CursorId
        {
            final private function __construct()
            {
            }
            final public function __toString()
            {
            }
        }
        final class BulkWrite implements \Countable
        {
            public function __construct(array $options = [])
            {
            }
            public function count()
            {
            }
            public function delete($filter, array $deleteOptions = [])
            {
            }
            public function insert($document)
            {
            }
            public function update($filter, $newObj, array $updateOptions = [])
            {
            }
        }
        final class WriteConcern
        {
            const MAJORITY = 'majority';
            final public function __construct($w, $wtimeout = 0, $journal = false)
            {
            }
            final public function getJurnal()
            {
            }
            final public function getW()
            {
            }
            final public function getWtimeout()
            {
            }
        }
        final class WriteResult
        {
            final public function getDeletedCount()
            {
            }
            final public function getInsertedCount()
            {
            }
            final public function getMatchedCount()
            {
            }
            final public function getModifiedCount()
            {
            }
            final public function getServer()
            {
            }
            final public function getUpsertedCount()
            {
            }
            final public function getUpsertedIds()
            {
            }
            final public function getWriteConcernError()
            {
            }
            final public function getWriteErrors()
            {
            }
            final public function isAcknowledged()
            {
            }
        }
        final class WriteError
        {
            final public function getCode()
            {
            }
            final public function getIndex()
            {
            }
            final public function getInfo()
            {
            }
            final public function getMessage()
            {
            }
        }
        final class WriteConcernError
        {
            final public function getCode()
            {
            }
            final public function getInfo()
            {
            }
            final public function getMessage()
            {
            }
        }
    }
    namespace MongoDB\Driver\Exception {
        use MongoDB\Driver\WriteResult;
        class RuntimeException extends \RuntimeException implements Exception
        {
        }
        interface Exception
        {
        }
        class AuthenticationException extends ConnectionException implements Exception
        {
        }
        class ConnectionException extends RuntimeException implements Exception
        {
        }
        class DuplicateKeyException extends RuntimeException implements Exception
        {
        }
        class InvalidArgumentException extends \InvalidArgumentException implements Exception
        {
        }
        abstract class WriteException extends RuntimeException implements Exception
        {
            protected $writeResult;
            final public function  getWriteResult()
            {
            }
        }
        class WriteConcernException extends RuntimeException implements Exception
        {
        }
        class UnexpectedValueException extends \UnexpectedValueException implements Exception
        {
        }
        class BulkWriteException extends WriteException implements Exception
        {
        }
        class ConnectionTimeoutException extends ConnectionException implements Exception
        {
        }
        class ExecutionTimeoutException extends RuntimeException implements Exception
        {
        }
        class LogicException extends \LogicException implements Exception
        {
        }
        class SSLConnectionException extends ConnectionException implements Exception
        {
        }
    }
    namespace MongoDB\BSON {
        use MongoDB\Driver\Exception\InvalidArgumentException;
        use MongoDB\Driver\Exception\UnexpectedValueException;
        function fromJSON($json)
        {
        }
        function fromPHP($value)
        {
        }
        function toJSON($bson)
        {
        }
        function toPHP($bson, array $typeMap)
        {
        }
        class Binary implements Type
        {
            const TYPE_GENERIC = 0;
            const TYPE_FUNCTION = 1;
            const TYPE_OLD_BINARY = 2;
            const TYPE_OLD_UUID = 3;
            const TYPE_UUID = 4;
            const TYPE_MD5 = 5;
            const TYPE_USER_DEFINED = 128;
            public function __construct($data, $type)
            {
            }
            public function getData()
            {
            }
            public function getType()
            {
            }
        }
        class Decimal128 implements Type
        {
            final public function __construct($value = '')
            {
            }
            final public function __toString()
            {
            }
        }
        class Javascript implements Type
        {
            final public function __construct($code, $scope = [])
            {
            }
        }
        class MaxKey implements Type
        {
        }
        class MinKey implements Type
        {
        }
        class ObjectID implements Type
        {
            public function __construct($id = null)
            {
            }
            public function __toString()
            {
            }
        }
        class Regex implements Type
        {
            public function __construct($pattern, $flags)
            {
            }
            public function getFlags()
            {
            }
            public function getPattern()
            {
            }
            public function __toString()
            {
            }
        }
        class Timestamp implements Type
        {
            final public function __construct($increment, $timestamp)
            {
            }
            final public function __toString()
            {
            }
        }
        class UTCDateTime implements Type
        {
            final public function __construct($milliseconds=null)
            {
            }
            final public function toDateTime()
            {
            }
            final public function __toString()
            {
            }
        }
        interface Persistable extends Unserializable, Serializable
        {
        }
        interface Serializable extends Type
        {
            public function  bsonSerialize();
        }
        interface Unserializable extends Type
        {
            public function bsonUnserialize(array $data);
        }
        interface Type
        {
        }
    }
