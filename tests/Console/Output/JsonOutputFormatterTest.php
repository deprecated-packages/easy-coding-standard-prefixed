<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\Console\Output;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\EasyCodingStandard\Console\Output\JsonOutputFormatter;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffResultFactory;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;
final class JsonOutputFormatterTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    /**
     * @var JsonOutputFormatter
     */
    private $jsonOutputFormatter;
    /**
     * @var ErrorAndDiffCollector
     */
    private $errorAndDiffCollector;
    /**
     * @var ErrorAndDiffResultFactory
     */
    private $errorAndDiffResultFactory;
    protected function setUp() : void
    {
        $this->bootKernel(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class);
        $this->jsonOutputFormatter = $this->getService(\Symplify\EasyCodingStandard\Console\Output\JsonOutputFormatter::class);
        $this->errorAndDiffCollector = $this->getService(\Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector::class);
        $this->errorAndDiffResultFactory = $this->getService(\Symplify\EasyCodingStandard\Error\ErrorAndDiffResultFactory::class);
    }
    public function test() : void
    {
        $randomFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Source/RandomFile.php');
        $this->errorAndDiffCollector->addErrorMessage($randomFileInfo, 100, 'Error message', \PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
        $this->errorAndDiffCollector->addDiffForFileInfo($randomFileInfo, 'some diff', [\Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer::class]);
        $this->errorAndDiffCollector->addDiffForFileInfo($randomFileInfo, 'some other diff', [\Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer::class]);
        $errorAndDiffResult = $this->errorAndDiffResultFactory->create($this->errorAndDiffCollector);
        $jsonContent = $this->jsonOutputFormatter->createJsonContent($errorAndDiffResult);
        $this->assertStringMatchesFormatFile(__DIR__ . '/Fixture/expected_json_output.json', $jsonContent . \PHP_EOL);
    }
}
