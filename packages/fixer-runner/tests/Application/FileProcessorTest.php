<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\FixerRunner\Tests\Application;

use PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer;
use PhpCsFixer\Fixer\Basic\EncodingFixer;
use PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer;
use _PhpScoper880bfa4d8b51\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
final class FileProcessorTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    /**
     * @var FixerFileProcessor
     */
    private $fixerFileProcessor;
    protected function setUp() : void
    {
        static::bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/FileProcessorSource/easy-coding-standard.php']);
        $easyCodingStandardStyle = self::$container->get(\Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle::class);
        $easyCodingStandardStyle->setVerbosity(\_PhpScoper880bfa4d8b51\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_QUIET);
        $this->fixerFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor::class);
    }
    public function testGetSortedCheckers() : void
    {
        $checkers = $this->fixerFileProcessor->getCheckers();
        $this->assertCount(3, $this->fixerFileProcessor->getCheckers());
        $this->assertInstanceOf(\PhpCsFixer\Fixer\Basic\EncodingFixer::class, $checkers[0]);
        $this->assertInstanceOf(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class, $checkers[1]);
        $this->assertInstanceOf(\PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer::class, $checkers[2]);
    }
}
