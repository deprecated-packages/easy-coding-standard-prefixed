<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\SniffRunner\Tests\Application;

use _PhpScoper83a475a0590e\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;
final class ChangesetTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
{
    /**
     * @var SniffFileProcessor
     */
    private $sniffFileProcessor;
    protected function setUp() : void
    {
        static::bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/FileProcessorSource/ReferenceUsedNamesOnlySniff/easy-coding-standard.php']);
        $easyCodingStandardStyle = self::$container->get(\Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle::class);
        $easyCodingStandardStyle->setVerbosity(\_PhpScoper83a475a0590e\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_QUIET);
        $this->sniffFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor::class);
    }
    public function testFileProvingNeedOfProperSupportOfChangesets() : void
    {
        $smartFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/FileProcessorSource/ReferenceUsedNamesOnlySniff/FileProvingNeedOfProperSupportOfChangesets.php.inc');
        $changedContent = $this->sniffFileProcessor->processFile($smartFileInfo);
        $this->assertStringEqualsFile(__DIR__ . '/FileProcessorSource/ReferenceUsedNamesOnlySniff/FileProvingNeedOfProperSupportOfChangesets-fixed.php.inc', $changedContent);
    }
}
