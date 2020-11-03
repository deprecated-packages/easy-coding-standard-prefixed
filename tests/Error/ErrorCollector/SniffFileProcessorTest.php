<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\Error\ErrorCollector;

use _PhpScoper7f41430b5328\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\ChangedFilesDetector\ChangedFilesDetector;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffResultFactory;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;
final class SniffFileProcessorTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
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
        // silent output
        $easyCodingStandardStyle = self::$container->get(\Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle::class);
        $easyCodingStandardStyle->setVerbosity(\_PhpScoper7f41430b5328\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_QUIET);
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
