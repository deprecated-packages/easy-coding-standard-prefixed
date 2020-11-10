<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\Error\ErrorCollector;

use Symplify\EasyCodingStandard\ChangedFilesDetector\ChangedFilesDetector;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffResultFactory;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;
final class SniffFileProcessorTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    /**
     * @var ErrorAndDiffCollector
     */
    private $errorAndDiffCollector;
    /**
     * @var SniffFileProcessor
     */
    private $sniffFileProcessor;
    /**
     * @var ErrorAndDiffResultFactory
     */
    private $errorAndDiffResultFactory;
    protected function setUp() : void
    {
        $this->bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/SniffRunnerSource/easy-coding-standard.php']);
        $this->errorAndDiffCollector = self::$container->get(\Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector::class);
        $this->errorAndDiffResultFactory = self::$container->get(\Symplify\EasyCodingStandard\Error\ErrorAndDiffResultFactory::class);
        $this->sniffFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor::class);
        $changedFilesDetector = self::$container->get(\Symplify\EasyCodingStandard\ChangedFilesDetector\ChangedFilesDetector::class);
        $changedFilesDetector->clearCache();
    }
    public function test() : void
    {
        $smartFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/ErrorCollectorSource/NotPsr2Class.php.inc');
        $this->sniffFileProcessor->processFile($smartFileInfo);
        $errorAndDiffResult = $this->errorAndDiffResultFactory->create($this->errorAndDiffCollector);
        $this->assertSame(3, $errorAndDiffResult->getErrorCount());
        $this->assertSame(0, $errorAndDiffResult->getFileDiffsCount());
    }
}
