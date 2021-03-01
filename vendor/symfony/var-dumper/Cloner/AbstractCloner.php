<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf3dc21757def\Symfony\Component\VarDumper\Cloner;

use _PhpScoperf3dc21757def\Symfony\Component\VarDumper\Caster\Caster;
use _PhpScoperf3dc21757def\Symfony\Component\VarDumper\Exception\ThrowingCasterException;
/**
 * AbstractCloner implements a generic caster mechanism for objects and resources.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractCloner implements \_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Cloner\ClonerInterface
{
    public static $defaultCasters = ['__PHP_Incomplete_Class' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\Caster', 'castPhpIncompleteClass'], '_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\CutStub' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castCutArray'], '_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ConstStub' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\EnumStub' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castEnum'], 'Closure' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClosure'], 'Generator' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castGenerator'], 'ReflectionType' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castType'], 'ReflectionAttribute' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castAttribute'], 'ReflectionGenerator' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReflectionGenerator'], 'ReflectionClass' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClass'], 'ReflectionClassConstant' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClassConstant'], 'ReflectionFunctionAbstract' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castFunctionAbstract'], 'ReflectionMethod' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castMethod'], 'ReflectionParameter' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castParameter'], 'ReflectionProperty' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castProperty'], 'ReflectionReference' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReference'], 'ReflectionExtension' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castExtension'], 'ReflectionZendExtension' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castZendExtension'], '_PhpScoperf3dc21757def\\Doctrine\\Common\\Persistence\\ObjectManager' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperf3dc21757def\\Doctrine\\Common\\Proxy\\Proxy' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castCommonProxy'], '_PhpScoperf3dc21757def\\Doctrine\\ORM\\Proxy\\Proxy' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castOrmProxy'], '_PhpScoperf3dc21757def\\Doctrine\\ORM\\PersistentCollection' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castPersistentCollection'], '_PhpScoperf3dc21757def\\Doctrine\\Persistence\\ObjectManager' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], 'DOMException' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castException'], 'DOMStringList' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNameList' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMImplementation' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castImplementation'], 'DOMImplementationList' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNode' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNode'], 'DOMNameSpaceNode' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNameSpaceNode'], 'DOMDocument' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocument'], 'DOMNodeList' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNamedNodeMap' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMCharacterData' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castCharacterData'], 'DOMAttr' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castAttr'], 'DOMElement' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castElement'], 'DOMText' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castText'], 'DOMTypeinfo' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castTypeinfo'], 'DOMDomError' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDomError'], 'DOMLocator' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLocator'], 'DOMDocumentType' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocumentType'], 'DOMNotation' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNotation'], 'DOMEntity' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castEntity'], 'DOMProcessingInstruction' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castProcessingInstruction'], 'DOMXPath' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castXPath'], 'XMLReader' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster', 'castXmlReader'], 'ErrorException' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castErrorException'], 'Exception' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castException'], 'Error' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castError'], '_PhpScoperf3dc21757def\\Symfony\\Bridge\\Monolog\\Logger' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperf3dc21757def\\Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperf3dc21757def\\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperf3dc21757def\\Symfony\\Component\\HttpClient\\CurlHttpClient' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScoperf3dc21757def\\Symfony\\Component\\HttpClient\\NativeHttpClient' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScoperf3dc21757def\\Symfony\\Component\\HttpClient\\Response\\CurlResponse' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperf3dc21757def\\Symfony\\Component\\HttpClient\\Response\\NativeResponse' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperf3dc21757def\\Symfony\\Component\\HttpFoundation\\Request' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castRequest'], '_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castThrowingCasterException'], '_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\TraceStub' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castTraceStub'], '_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\FrameStub' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castFrameStub'], '_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperf3dc21757def\\Symfony\\Component\\ErrorHandler\\Exception\\SilencedErrorContext' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castSilencedErrorContext'], '_PhpScoperf3dc21757def\\Imagine\\Image\\ImageInterface' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ImagineCaster', 'castImage'], '_PhpScoperf3dc21757def\\Ramsey\\Uuid\\UuidInterface' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\UuidCaster', 'castRamseyUuid'], '_PhpScoperf3dc21757def\\ProxyManager\\Proxy\\ProxyInterface' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster', 'castProxy'], 'PHPUnit_Framework_MockObject_MockObject' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperf3dc21757def\\PHPUnit\\Framework\\MockObject\\MockObject' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperf3dc21757def\\PHPUnit\\Framework\\MockObject\\Stub' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperf3dc21757def\\Prophecy\\Prophecy\\ProphecySubjectInterface' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperf3dc21757def\\Mockery\\MockInterface' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], 'PDO' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdo'], 'PDOStatement' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdoStatement'], 'AMQPConnection' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castConnection'], 'AMQPChannel' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castChannel'], 'AMQPQueue' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castQueue'], 'AMQPExchange' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castExchange'], 'AMQPEnvelope' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castEnvelope'], 'ArrayObject' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayObject'], 'ArrayIterator' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayIterator'], 'SplDoublyLinkedList' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castDoublyLinkedList'], 'SplFileInfo' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileInfo'], 'SplFileObject' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileObject'], 'SplHeap' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'SplObjectStorage' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castObjectStorage'], 'SplPriorityQueue' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'OuterIterator' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castOuterIterator'], 'WeakReference' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castWeakReference'], 'Redis' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedis'], 'RedisArray' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisArray'], 'RedisCluster' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisCluster'], 'DateTimeInterface' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castDateTime'], 'DateInterval' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castInterval'], 'DateTimeZone' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castTimeZone'], 'DatePeriod' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castPeriod'], 'GMP' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\GmpCaster', 'castGmp'], 'MessageFormatter' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castMessageFormatter'], 'NumberFormatter' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castNumberFormatter'], 'IntlTimeZone' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlTimeZone'], 'IntlCalendar' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlCalendar'], 'IntlDateFormatter' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlDateFormatter'], 'Memcached' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster', 'castMemcached'], '_PhpScoperf3dc21757def\\Ds\\Collection' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castCollection'], '_PhpScoperf3dc21757def\\Ds\\Map' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castMap'], '_PhpScoperf3dc21757def\\Ds\\Pair' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPair'], '_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPairStub'], 'CurlHandle' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castCurl'], ':curl' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castCurl'], ':dba' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], ':dba persistent' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], 'GdImage' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castGd'], ':gd' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castGd'], ':mysql link' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castMysqlLink'], ':pgsql large object' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLargeObject'], ':pgsql link' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql link persistent' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql result' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castResult'], ':process' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castProcess'], ':stream' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], 'OpenSSLCertificate' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castOpensslX509'], ':OpenSSL X.509' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castOpensslX509'], ':persistent stream' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], ':stream-context' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStreamContext'], 'XmlParser' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster', 'castXml'], ':xml' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster', 'castXml'], 'RdKafka' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castRdKafka'], '_PhpScoperf3dc21757def\\RdKafka\\Conf' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castConf'], '_PhpScoperf3dc21757def\\RdKafka\\KafkaConsumer' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castKafkaConsumer'], '_PhpScoperf3dc21757def\\RdKafka\\Metadata\\Broker' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castBrokerMetadata'], '_PhpScoperf3dc21757def\\RdKafka\\Metadata\\Collection' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castCollectionMetadata'], '_PhpScoperf3dc21757def\\RdKafka\\Metadata\\Partition' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castPartitionMetadata'], '_PhpScoperf3dc21757def\\RdKafka\\Metadata\\Topic' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicMetadata'], '_PhpScoperf3dc21757def\\RdKafka\\Message' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castMessage'], '_PhpScoperf3dc21757def\\RdKafka\\Topic' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopic'], '_PhpScoperf3dc21757def\\RdKafka\\TopicPartition' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicPartition'], '_PhpScoperf3dc21757def\\RdKafka\\TopicConf' => ['_PhpScoperf3dc21757def\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicConf']];
    protected $maxItems = 2500;
    protected $maxString = -1;
    protected $minDepth = 1;
    private $casters = [];
    private $prevErrorHandler;
    private $classInfo = [];
    private $filter = 0;
    /**
     * @param callable[]|null $casters A map of casters
     *
     * @see addCasters
     */
    public function __construct(array $casters = null)
    {
        if (null === $casters) {
            $casters = static::$defaultCasters;
        }
        $this->addCasters($casters);
    }
    /**
     * Adds casters for resources and objects.
     *
     * Maps resources or objects types to a callback.
     * Types are in the key, with a callable caster for value.
     * Resource types are to be prefixed with a `:`,
     * see e.g. static::$defaultCasters.
     *
     * @param callable[] $casters A map of casters
     */
    public function addCasters(array $casters)
    {
        foreach ($casters as $type => $callback) {
            $this->casters[$type][] = $callback;
        }
    }
    /**
     * Sets the maximum number of items to clone past the minimum depth in nested structures.
     */
    public function setMaxItems(int $maxItems)
    {
        $this->maxItems = $maxItems;
    }
    /**
     * Sets the maximum cloned length for strings.
     */
    public function setMaxString(int $maxString)
    {
        $this->maxString = $maxString;
    }
    /**
     * Sets the minimum tree depth where we are guaranteed to clone all the items.  After this
     * depth is reached, only setMaxItems items will be cloned.
     */
    public function setMinDepth(int $minDepth)
    {
        $this->minDepth = $minDepth;
    }
    /**
     * Clones a PHP variable.
     *
     * @param mixed $var    Any PHP variable
     * @param int   $filter A bit field of Caster::EXCLUDE_* constants
     *
     * @return Data The cloned variable represented by a Data object
     */
    public function cloneVar($var, int $filter = 0)
    {
        $this->prevErrorHandler = \set_error_handler(function ($type, $msg, $file, $line, $context = []) {
            if (\E_RECOVERABLE_ERROR === $type || \E_USER_ERROR === $type) {
                // Cloner never dies
                throw new \ErrorException($msg, 0, $type, $file, $line);
            }
            if ($this->prevErrorHandler) {
                return ($this->prevErrorHandler)($type, $msg, $file, $line, $context);
            }
            return \false;
        });
        $this->filter = $filter;
        if ($gc = \gc_enabled()) {
            \gc_disable();
        }
        try {
            return new \_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Cloner\Data($this->doClone($var));
        } finally {
            if ($gc) {
                \gc_enable();
            }
            \restore_error_handler();
            $this->prevErrorHandler = null;
        }
    }
    /**
     * Effectively clones the PHP variable.
     *
     * @param mixed $var Any PHP variable
     *
     * @return array The cloned variable represented in an array
     */
    protected abstract function doClone($var);
    /**
     * Casts an object to an array representation.
     *
     * @param bool $isNested True if the object is nested in the dumped structure
     *
     * @return array The object casted as array
     */
    protected function castObject(\_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
    {
        $obj = $stub->value;
        $class = $stub->class;
        if (\PHP_VERSION_ID < 80000 ? "\0" === ($class[15] ?? null) : \false !== \strpos($class, "@anonymous\0")) {
            $stub->class = \get_debug_type($obj);
        }
        if (isset($this->classInfo[$class])) {
            [$i, $parents, $hasDebugInfo, $fileInfo] = $this->classInfo[$class];
        } else {
            $i = 2;
            $parents = [$class];
            $hasDebugInfo = \method_exists($class, '__debugInfo');
            foreach (\class_parents($class) as $p) {
                $parents[] = $p;
                ++$i;
            }
            foreach (\class_implements($class) as $p) {
                $parents[] = $p;
                ++$i;
            }
            $parents[] = '*';
            $r = new \ReflectionClass($class);
            $fileInfo = $r->isInternal() || $r->isSubclassOf(\_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Cloner\Stub::class) ? [] : ['file' => $r->getFileName(), 'line' => $r->getStartLine()];
            $this->classInfo[$class] = [$i, $parents, $hasDebugInfo, $fileInfo];
        }
        $stub->attr += $fileInfo;
        $a = \_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Caster\Caster::castObject($obj, $class, $hasDebugInfo, $stub->class);
        try {
            while ($i--) {
                if (!empty($this->casters[$p = $parents[$i]])) {
                    foreach ($this->casters[$p] as $callback) {
                        $a = $callback($obj, $a, $stub, $isNested, $this->filter);
                    }
                }
            }
        } catch (\Exception $e) {
            $a = [(\_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? \_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL : '') . '⚠' => new \_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Exception\ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
    /**
     * Casts a resource to an array representation.
     *
     * @param bool $isNested True if the object is nested in the dumped structure
     *
     * @return array The resource casted as array
     */
    protected function castResource(\_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
    {
        $a = [];
        $res = $stub->value;
        $type = $stub->class;
        try {
            if (!empty($this->casters[':' . $type])) {
                foreach ($this->casters[':' . $type] as $callback) {
                    $a = $callback($res, $a, $stub, $isNested, $this->filter);
                }
            }
        } catch (\Exception $e) {
            $a = [(\_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? \_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL : '') . '⚠' => new \_PhpScoperf3dc21757def\Symfony\Component\VarDumper\Exception\ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
}
