<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\Error\ErrorCollector;

use _PhpScoper133be48300f9\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector;
use Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;
final class FixerFileProcessorTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
{
    /**
     * @var ErrorAndDiffCollector
     */
    private $errorAndDiffCollector;
    /**
     * @var FixerFileProcessor
     */
    private $fixerFileProcessor;
    protected function setUp() : void
    {
        $this->bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/FixerRunnerSource/phpunit-fixer-config.php']);
        $this->errorAndDiffCollector = self::$container->get(\Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector::class);
        $this->fixerFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor::class);
        // silent output
        $easyCodingStandardStyle = self::$container->get(\Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle::class);
        $easyCodingStandardStyle->setVerbosity(\_PhpScoper133be48300f9\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_QUIET);
    }
    public function test() : void
    {
        $this->runFileProcessor();
        $this->assertCount(0, $this->errorAndDiffCollector->getErrors());
        $this->assertCount(1, $this->errorAndDiffCollector->getFileDiffs());
    }
    private function runFileProcessor() : void
    {
        $fileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/ErrorCollectorSource/NotPsr2Class.php.inc');
        $this->fixerFileProcessor->processFile($fileInfo);
    }
}
