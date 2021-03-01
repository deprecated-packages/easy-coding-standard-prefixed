<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Caster\Caster;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Exception\ThrowingCasterException;
/**
 * AbstractCloner implements a generic caster mechanism for objects and resources.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractCloner implements \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\ClonerInterface
{
    public static $defaultCasters = ['__PHP_Incomplete_Class' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\Caster', 'castPhpIncompleteClass'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\CutStub' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castCutArray'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ConstStub' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\EnumStub' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castEnum'], 'Closure' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClosure'], 'Generator' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castGenerator'], 'ReflectionType' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castType'], 'ReflectionAttribute' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castAttribute'], 'ReflectionGenerator' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReflectionGenerator'], 'ReflectionClass' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClass'], 'ReflectionClassConstant' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClassConstant'], 'ReflectionFunctionAbstract' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castFunctionAbstract'], 'ReflectionMethod' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castMethod'], 'ReflectionParameter' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castParameter'], 'ReflectionProperty' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castProperty'], 'ReflectionReference' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReference'], 'ReflectionExtension' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castExtension'], 'ReflectionZendExtension' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castZendExtension'], '_PhpScoperc4ea0f0bd23f\\Doctrine\\Common\\Persistence\\ObjectManager' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperc4ea0f0bd23f\\Doctrine\\Common\\Proxy\\Proxy' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castCommonProxy'], '_PhpScoperc4ea0f0bd23f\\Doctrine\\ORM\\Proxy\\Proxy' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castOrmProxy'], '_PhpScoperc4ea0f0bd23f\\Doctrine\\ORM\\PersistentCollection' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castPersistentCollection'], '_PhpScoperc4ea0f0bd23f\\Doctrine\\Persistence\\ObjectManager' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], 'DOMException' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castException'], 'DOMStringList' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNameList' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMImplementation' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castImplementation'], 'DOMImplementationList' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNode' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNode'], 'DOMNameSpaceNode' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNameSpaceNode'], 'DOMDocument' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocument'], 'DOMNodeList' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNamedNodeMap' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMCharacterData' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castCharacterData'], 'DOMAttr' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castAttr'], 'DOMElement' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castElement'], 'DOMText' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castText'], 'DOMTypeinfo' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castTypeinfo'], 'DOMDomError' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDomError'], 'DOMLocator' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLocator'], 'DOMDocumentType' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocumentType'], 'DOMNotation' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNotation'], 'DOMEntity' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castEntity'], 'DOMProcessingInstruction' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castProcessingInstruction'], 'DOMXPath' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castXPath'], 'XMLReader' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster', 'castXmlReader'], 'ErrorException' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castErrorException'], 'Exception' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castException'], 'Error' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castError'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Bridge\\Monolog\\Logger' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\HttpClient\\CurlHttpClient' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\HttpClient\\NativeHttpClient' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\HttpClient\\Response\\CurlResponse' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\HttpClient\\Response\\NativeResponse' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\HttpFoundation\\Request' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castRequest'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castThrowingCasterException'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\TraceStub' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castTraceStub'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\FrameStub' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castFrameStub'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\ErrorHandler\\Exception\\SilencedErrorContext' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castSilencedErrorContext'], '_PhpScoperc4ea0f0bd23f\\Imagine\\Image\\ImageInterface' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ImagineCaster', 'castImage'], '_PhpScoperc4ea0f0bd23f\\Ramsey\\Uuid\\UuidInterface' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\UuidCaster', 'castRamseyUuid'], '_PhpScoperc4ea0f0bd23f\\ProxyManager\\Proxy\\ProxyInterface' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster', 'castProxy'], 'PHPUnit_Framework_MockObject_MockObject' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperc4ea0f0bd23f\\PHPUnit\\Framework\\MockObject\\MockObject' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperc4ea0f0bd23f\\PHPUnit\\Framework\\MockObject\\Stub' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperc4ea0f0bd23f\\Prophecy\\Prophecy\\ProphecySubjectInterface' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperc4ea0f0bd23f\\Mockery\\MockInterface' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], 'PDO' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdo'], 'PDOStatement' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdoStatement'], 'AMQPConnection' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castConnection'], 'AMQPChannel' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castChannel'], 'AMQPQueue' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castQueue'], 'AMQPExchange' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castExchange'], 'AMQPEnvelope' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castEnvelope'], 'ArrayObject' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayObject'], 'ArrayIterator' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayIterator'], 'SplDoublyLinkedList' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castDoublyLinkedList'], 'SplFileInfo' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileInfo'], 'SplFileObject' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileObject'], 'SplHeap' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'SplObjectStorage' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castObjectStorage'], 'SplPriorityQueue' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'OuterIterator' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castOuterIterator'], 'WeakReference' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castWeakReference'], 'Redis' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedis'], 'RedisArray' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisArray'], 'RedisCluster' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisCluster'], 'DateTimeInterface' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castDateTime'], 'DateInterval' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castInterval'], 'DateTimeZone' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castTimeZone'], 'DatePeriod' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castPeriod'], 'GMP' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\GmpCaster', 'castGmp'], 'MessageFormatter' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castMessageFormatter'], 'NumberFormatter' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castNumberFormatter'], 'IntlTimeZone' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlTimeZone'], 'IntlCalendar' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlCalendar'], 'IntlDateFormatter' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlDateFormatter'], 'Memcached' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster', 'castMemcached'], '_PhpScoperc4ea0f0bd23f\\Ds\\Collection' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castCollection'], '_PhpScoperc4ea0f0bd23f\\Ds\\Map' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castMap'], '_PhpScoperc4ea0f0bd23f\\Ds\\Pair' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPair'], '_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPairStub'], 'CurlHandle' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castCurl'], ':curl' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castCurl'], ':dba' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], ':dba persistent' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], 'GdImage' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castGd'], ':gd' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castGd'], ':mysql link' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castMysqlLink'], ':pgsql large object' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLargeObject'], ':pgsql link' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql link persistent' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql result' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castResult'], ':process' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castProcess'], ':stream' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], 'OpenSSLCertificate' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castOpensslX509'], ':OpenSSL X.509' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castOpensslX509'], ':persistent stream' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], ':stream-context' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStreamContext'], 'XmlParser' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster', 'castXml'], ':xml' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster', 'castXml'], 'RdKafka' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castRdKafka'], '_PhpScoperc4ea0f0bd23f\\RdKafka\\Conf' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castConf'], '_PhpScoperc4ea0f0bd23f\\RdKafka\\KafkaConsumer' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castKafkaConsumer'], '_PhpScoperc4ea0f0bd23f\\RdKafka\\Metadata\\Broker' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castBrokerMetadata'], '_PhpScoperc4ea0f0bd23f\\RdKafka\\Metadata\\Collection' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castCollectionMetadata'], '_PhpScoperc4ea0f0bd23f\\RdKafka\\Metadata\\Partition' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castPartitionMetadata'], '_PhpScoperc4ea0f0bd23f\\RdKafka\\Metadata\\Topic' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicMetadata'], '_PhpScoperc4ea0f0bd23f\\RdKafka\\Message' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castMessage'], '_PhpScoperc4ea0f0bd23f\\RdKafka\\Topic' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopic'], '_PhpScoperc4ea0f0bd23f\\RdKafka\\TopicPartition' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicPartition'], '_PhpScoperc4ea0f0bd23f\\RdKafka\\TopicConf' => ['_PhpScoperc4ea0f0bd23f\\Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster', 'castTopicConf']];
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
            return new \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\Data($this->doClone($var));
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
    protected function castObject(\_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
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
            $fileInfo = $r->isInternal() || $r->isSubclassOf(\_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\Stub::class) ? [] : ['file' => $r->getFileName(), 'line' => $r->getStartLine()];
            $this->classInfo[$class] = [$i, $parents, $hasDebugInfo, $fileInfo];
        }
        $stub->attr += $fileInfo;
        $a = \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Caster\Caster::castObject($obj, $class, $hasDebugInfo, $stub->class);
        try {
            while ($i--) {
                if (!empty($this->casters[$p = $parents[$i]])) {
                    foreach ($this->casters[$p] as $callback) {
                        $a = $callback($obj, $a, $stub, $isNested, $this->filter);
                    }
                }
            }
        } catch (\Exception $e) {
            $a = [(\_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL : '') . '⚠' => new \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Exception\ThrowingCasterException($e)] + $a;
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
    protected function castResource(\_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
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
            $a = [(\_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL : '') . '⚠' => new \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Exception\ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
}
