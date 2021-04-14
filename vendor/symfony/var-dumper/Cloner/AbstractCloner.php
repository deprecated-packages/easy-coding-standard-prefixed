<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Cloner;

use _PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Caster\Caster;
use _PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Exception\ThrowingCasterException;
/**
 * AbstractCloner implements a generic caster mechanism for objects and resources.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractCloner implements \_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Cloner\ClonerInterface
{
    public static $defaultCasters = ['__PHP_Incomplete_Class' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\Caster', 'castPhpIncompleteClass'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\CutStub' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castCutArray'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ConstStub' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\EnumStub' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castEnum'], 'Closure' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClosure'], 'Generator' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castGenerator'], 'ReflectionType' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castType'], 'ReflectionAttribute' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castAttribute'], 'ReflectionGenerator' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReflectionGenerator'], 'ReflectionClass' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClass'], 'ReflectionClassConstant' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClassConstant'], 'ReflectionFunctionAbstract' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castFunctionAbstract'], 'ReflectionMethod' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castMethod'], 'ReflectionParameter' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castParameter'], 'ReflectionProperty' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castProperty'], 'ReflectionReference' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReference'], 'ReflectionExtension' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castExtension'], 'ReflectionZendExtension' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castZendExtension'], '_PhpScoperd32e35cfad84\\Doctrine\\Common\\Persistence\\ObjectManager' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperd32e35cfad84\\Doctrine\\Common\\Proxy\\Proxy' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castCommonProxy'], '_PhpScoperd32e35cfad84\\Doctrine\\ORM\\Proxy\\Proxy' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castOrmProxy'], '_PhpScoperd32e35cfad84\\Doctrine\\ORM\\PersistentCollection' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castPersistentCollection'], '_PhpScoperd32e35cfad84\\Doctrine\\Persistence\\ObjectManager' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], 'DOMException' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castException'], 'DOMStringList' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNameList' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMImplementation' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castImplementation'], 'DOMImplementationList' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNode' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNode'], 'DOMNameSpaceNode' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNameSpaceNode'], 'DOMDocument' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocument'], 'DOMNodeList' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNamedNodeMap' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMCharacterData' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castCharacterData'], 'DOMAttr' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castAttr'], 'DOMElement' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castElement'], 'DOMText' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castText'], 'DOMTypeinfo' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castTypeinfo'], 'DOMDomError' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDomError'], 'DOMLocator' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLocator'], 'DOMDocumentType' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocumentType'], 'DOMNotation' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNotation'], 'DOMEntity' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castEntity'], 'DOMProcessingInstruction' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castProcessingInstruction'], 'DOMXPath' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castXPath'], 'XMLReader' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster', 'castXmlReader'], 'ErrorException' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castErrorException'], 'Exception' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castException'], 'Error' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castError'], '_PhpScoperd32e35cfad84\\Symfony\\Bridge\\Monolog\\Logger' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\HttpClient\\CurlHttpClient' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\HttpClient\\NativeHttpClient' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\HttpClient\\Response\\CurlResponse' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\HttpClient\\Response\\NativeResponse' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\HttpFoundation\\Request' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castRequest'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castThrowingCasterException'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\TraceStub' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castTraceStub'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\FrameStub' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castFrameStub'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\ErrorHandler\\Exception\\SilencedErrorContext' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castSilencedErrorContext'], '_PhpScoperd32e35cfad84\\Imagine\\Image\\ImageInterface' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ImagineCaster', 'castImage'], '_PhpScoperd32e35cfad84\\Ramsey\\Uuid\\UuidInterface' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\UuidCaster', 'castRamseyUuid'], '_PhpScoperd32e35cfad84\\ProxyManager\\Proxy\\ProxyInterface' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster', 'castProxy'], 'PHPUnit_Framework_MockObject_MockObject' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperd32e35cfad84\\PHPUnit\\Framework\\MockObject\\MockObject' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperd32e35cfad84\\PHPUnit\\Framework\\MockObject\\Stub' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperd32e35cfad84\\Prophecy\\Prophecy\\ProphecySubjectInterface' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperd32e35cfad84\\Mockery\\MockInterface' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], 'PDO' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdo'], 'PDOStatement' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdoStatement'], 'AMQPConnection' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castConnection'], 'AMQPChannel' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castChannel'], 'AMQPQueue' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castQueue'], 'AMQPExchange' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castExchange'], 'AMQPEnvelope' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castEnvelope'], 'ArrayObject' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayObject'], 'ArrayIterator' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayIterator'], 'SplDoublyLinkedList' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castDoublyLinkedList'], 'SplFileInfo' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileInfo'], 'SplFileObject' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileObject'], 'SplHeap' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'SplObjectStorage' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castObjectStorage'], 'SplPriorityQueue' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'OuterIterator' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castOuterIterator'], 'WeakReference' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castWeakReference'], 'Redis' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedis'], 'RedisArray' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisArray'], 'RedisCluster' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisCluster'], 'DateTimeInterface' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castDateTime'], 'DateInterval' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castInterval'], 'DateTimeZone' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castTimeZone'], 'DatePeriod' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castPeriod'], 'GMP' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\GmpCaster', 'castGmp'], 'MessageFormatter' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castMessageFormatter'], 'NumberFormatter' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castNumberFormatter'], 'IntlTimeZone' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlTimeZone'], 'IntlCalendar' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlCalendar'], 'IntlDateFormatter' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlDateFormatter'], 'Memcached' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster', 'castMemcached'], '_PhpScoperd32e35cfad84\\Ds\\Collection' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castCollection'], '_PhpScoperd32e35cfad84\\Ds\\Map' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castMap'], '_PhpScoperd32e35cfad84\\Ds\\Pair' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPair'], '_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPairStub'], 'CurlHandle' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castCurl'], ':curl' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castCurl'], ':dba' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], ':dba persistent' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], 'GdImage' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castGd'], ':gd' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castGd'], ':mysql link' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castMysqlLink'], ':pgsql large object' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLargeObject'], ':pgsql link' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql link persistent' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql result' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castResult'], ':process' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castProcess'], ':stream' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], 'OpenSSLCertificate' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castOpensslX509'], ':OpenSSL X.509' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castOpensslX509'], ':persistent stream' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], ':stream-context' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStreamContext'], 'XmlParser' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster', 'castXml'], ':xml' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster', 'castXml'], 'RdKafka' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castRdKafka'], '_PhpScoperd32e35cfad84\\RdKafka\\Conf' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castConf'], '_PhpScoperd32e35cfad84\\RdKafka\\KafkaConsumer' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castKafkaConsumer'], '_PhpScoperd32e35cfad84\\RdKafka\\Metadata\\Broker' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castBrokerMetadata'], '_PhpScoperd32e35cfad84\\RdKafka\\Metadata\\Collection' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castCollectionMetadata'], '_PhpScoperd32e35cfad84\\RdKafka\\Metadata\\Partition' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castPartitionMetadata'], '_PhpScoperd32e35cfad84\\RdKafka\\Metadata\\Topic' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicMetadata'], '_PhpScoperd32e35cfad84\\RdKafka\\Message' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castMessage'], '_PhpScoperd32e35cfad84\\RdKafka\\Topic' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopic'], '_PhpScoperd32e35cfad84\\RdKafka\\TopicPartition' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicPartition'], '_PhpScoperd32e35cfad84\\RdKafka\\TopicConf' => ['_PhpScoperd32e35cfad84\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicConf']];
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
            return new \_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Cloner\Data($this->doClone($var));
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
    protected function castObject(\_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
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
            $fileInfo = $r->isInternal() || $r->isSubclassOf(\_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Cloner\Stub::class) ? [] : ['file' => $r->getFileName(), 'line' => $r->getStartLine()];
            $this->classInfo[$class] = [$i, $parents, $hasDebugInfo, $fileInfo];
        }
        $stub->attr += $fileInfo;
        $a = \_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Caster\Caster::castObject($obj, $class, $hasDebugInfo, $stub->class);
        try {
            while ($i--) {
                if (!empty($this->casters[$p = $parents[$i]])) {
                    foreach ($this->casters[$p] as $callback) {
                        $a = $callback($obj, $a, $stub, $isNested, $this->filter);
                    }
                }
            }
        } catch (\Exception $e) {
            $a = [(\_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? \_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL : '') . '⚠' => new \_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Exception\ThrowingCasterException($e)] + $a;
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
    protected function castResource(\_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
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
            $a = [(\_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? \_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL : '') . '⚠' => new \_PhpScoperd32e35cfad84\Symfony\Component\VarDumper\Exception\ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
}
