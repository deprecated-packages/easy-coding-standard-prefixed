<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Cloner;

use _PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Caster\Caster;
use _PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Exception\ThrowingCasterException;
/**
 * AbstractCloner implements a generic caster mechanism for objects and resources.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractCloner implements \_PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Cloner\ClonerInterface
{
    public static $defaultCasters = ['__PHP_Incomplete_Class' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\Caster', 'castPhpIncompleteClass'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\CutStub' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castCutArray'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ConstStub' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\EnumStub' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castEnum'], 'Closure' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClosure'], 'Generator' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castGenerator'], 'ReflectionType' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castType'], 'ReflectionAttribute' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castAttribute'], 'ReflectionGenerator' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReflectionGenerator'], 'ReflectionClass' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClass'], 'ReflectionClassConstant' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClassConstant'], 'ReflectionFunctionAbstract' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castFunctionAbstract'], 'ReflectionMethod' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castMethod'], 'ReflectionParameter' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castParameter'], 'ReflectionProperty' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castProperty'], 'ReflectionReference' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReference'], 'ReflectionExtension' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castExtension'], 'ReflectionZendExtension' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castZendExtension'], '_PhpScopercfeba9d8ad31\\Doctrine\\Common\\Persistence\\ObjectManager' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScopercfeba9d8ad31\\Doctrine\\Common\\Proxy\\Proxy' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castCommonProxy'], '_PhpScopercfeba9d8ad31\\Doctrine\\ORM\\Proxy\\Proxy' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castOrmProxy'], '_PhpScopercfeba9d8ad31\\Doctrine\\ORM\\PersistentCollection' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castPersistentCollection'], '_PhpScopercfeba9d8ad31\\Doctrine\\Persistence\\ObjectManager' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], 'DOMException' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castException'], 'DOMStringList' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNameList' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMImplementation' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castImplementation'], 'DOMImplementationList' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNode' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNode'], 'DOMNameSpaceNode' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNameSpaceNode'], 'DOMDocument' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocument'], 'DOMNodeList' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNamedNodeMap' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMCharacterData' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castCharacterData'], 'DOMAttr' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castAttr'], 'DOMElement' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castElement'], 'DOMText' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castText'], 'DOMTypeinfo' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castTypeinfo'], 'DOMDomError' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDomError'], 'DOMLocator' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLocator'], 'DOMDocumentType' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocumentType'], 'DOMNotation' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNotation'], 'DOMEntity' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castEntity'], 'DOMProcessingInstruction' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castProcessingInstruction'], 'DOMXPath' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castXPath'], 'XMLReader' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster', 'castXmlReader'], 'ErrorException' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castErrorException'], 'Exception' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castException'], 'Error' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castError'], '_PhpScopercfeba9d8ad31\\Symfony\\Bridge\\Monolog\\Logger' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\HttpClient\\CurlHttpClient' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\HttpClient\\NativeHttpClient' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\HttpClient\\Response\\CurlResponse' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\HttpClient\\Response\\NativeResponse' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\HttpFoundation\\Request' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castRequest'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castThrowingCasterException'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\TraceStub' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castTraceStub'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\FrameStub' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castFrameStub'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\ErrorHandler\\Exception\\SilencedErrorContext' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castSilencedErrorContext'], '_PhpScopercfeba9d8ad31\\Imagine\\Image\\ImageInterface' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ImagineCaster', 'castImage'], '_PhpScopercfeba9d8ad31\\Ramsey\\Uuid\\UuidInterface' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\UuidCaster', 'castRamseyUuid'], '_PhpScopercfeba9d8ad31\\ProxyManager\\Proxy\\ProxyInterface' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster', 'castProxy'], 'PHPUnit_Framework_MockObject_MockObject' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScopercfeba9d8ad31\\PHPUnit\\Framework\\MockObject\\MockObject' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScopercfeba9d8ad31\\PHPUnit\\Framework\\MockObject\\Stub' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScopercfeba9d8ad31\\Prophecy\\Prophecy\\ProphecySubjectInterface' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScopercfeba9d8ad31\\Mockery\\MockInterface' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], 'PDO' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdo'], 'PDOStatement' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdoStatement'], 'AMQPConnection' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castConnection'], 'AMQPChannel' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castChannel'], 'AMQPQueue' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castQueue'], 'AMQPExchange' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castExchange'], 'AMQPEnvelope' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castEnvelope'], 'ArrayObject' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayObject'], 'ArrayIterator' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayIterator'], 'SplDoublyLinkedList' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castDoublyLinkedList'], 'SplFileInfo' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileInfo'], 'SplFileObject' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileObject'], 'SplHeap' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'SplObjectStorage' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castObjectStorage'], 'SplPriorityQueue' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'OuterIterator' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castOuterIterator'], 'WeakReference' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castWeakReference'], 'Redis' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedis'], 'RedisArray' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisArray'], 'RedisCluster' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisCluster'], 'DateTimeInterface' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castDateTime'], 'DateInterval' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castInterval'], 'DateTimeZone' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castTimeZone'], 'DatePeriod' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castPeriod'], 'GMP' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\GmpCaster', 'castGmp'], 'MessageFormatter' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castMessageFormatter'], 'NumberFormatter' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castNumberFormatter'], 'IntlTimeZone' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlTimeZone'], 'IntlCalendar' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlCalendar'], 'IntlDateFormatter' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlDateFormatter'], 'Memcached' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster', 'castMemcached'], '_PhpScopercfeba9d8ad31\\Ds\\Collection' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castCollection'], '_PhpScopercfeba9d8ad31\\Ds\\Map' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castMap'], '_PhpScopercfeba9d8ad31\\Ds\\Pair' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPair'], '_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPairStub'], 'CurlHandle' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castCurl'], ':curl' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castCurl'], ':dba' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], ':dba persistent' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], 'GdImage' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castGd'], ':gd' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castGd'], ':mysql link' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castMysqlLink'], ':pgsql large object' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLargeObject'], ':pgsql link' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql link persistent' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql result' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castResult'], ':process' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castProcess'], ':stream' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], 'OpenSSLCertificate' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castOpensslX509'], ':OpenSSL X.509' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castOpensslX509'], ':persistent stream' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], ':stream-context' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStreamContext'], 'XmlParser' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster', 'castXml'], ':xml' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster', 'castXml'], 'RdKafka' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castRdKafka'], '_PhpScopercfeba9d8ad31\\RdKafka\\Conf' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castConf'], '_PhpScopercfeba9d8ad31\\RdKafka\\KafkaConsumer' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castKafkaConsumer'], '_PhpScopercfeba9d8ad31\\RdKafka\\Metadata\\Broker' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castBrokerMetadata'], '_PhpScopercfeba9d8ad31\\RdKafka\\Metadata\\Collection' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castCollectionMetadata'], '_PhpScopercfeba9d8ad31\\RdKafka\\Metadata\\Partition' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castPartitionMetadata'], '_PhpScopercfeba9d8ad31\\RdKafka\\Metadata\\Topic' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicMetadata'], '_PhpScopercfeba9d8ad31\\RdKafka\\Message' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castMessage'], '_PhpScopercfeba9d8ad31\\RdKafka\\Topic' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopic'], '_PhpScopercfeba9d8ad31\\RdKafka\\TopicPartition' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicPartition'], '_PhpScopercfeba9d8ad31\\RdKafka\\TopicConf' => ['_PhpScopercfeba9d8ad31\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicConf']];
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
            return new \_PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Cloner\Data($this->doClone($var));
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
    protected function castObject(\_PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
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
            $fileInfo = $r->isInternal() || $r->isSubclassOf(\_PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Cloner\Stub::class) ? [] : ['file' => $r->getFileName(), 'line' => $r->getStartLine()];
            $this->classInfo[$class] = [$i, $parents, $hasDebugInfo, $fileInfo];
        }
        $stub->attr += $fileInfo;
        $a = Caster::castObject($obj, $class, $hasDebugInfo, $stub->class);
        try {
            while ($i--) {
                if (!empty($this->casters[$p = $parents[$i]])) {
                    foreach ($this->casters[$p] as $callback) {
                        $a = $callback($obj, $a, $stub, $isNested, $this->filter);
                    }
                }
            }
        } catch (\Exception $e) {
            $a = [(\_PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? Caster::PREFIX_VIRTUAL : '') . '⚠' => new ThrowingCasterException($e)] + $a;
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
    protected function castResource(\_PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
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
            $a = [(\_PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? Caster::PREFIX_VIRTUAL : '') . '⚠' => new ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
}
