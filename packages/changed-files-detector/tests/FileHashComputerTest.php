<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\ChangedFilesDetector\Tests;

use _PhpScoper83a475a0590e\Migrify\PhpConfigPrinter\YamlToPhpConverter;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use Symplify\EasyCodingStandard\ChangedFilesDetector\FileHashComputer;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
use Symplify\SmartFileSystem\SmartFileSystem;
final class FileHashComputerTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
{
    /**
     * @var string
     */
    private const INCLUDED_CONFIG_FILE = __DIR__ . '/FileHashComputerSource/another-one.php';
    /**
     * @var FileHashComputer
     */
    private $fileHashComputer;
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    /**
     * @var YamlToPhpConverter
     */
    private $yamlToPhpConverter;
    protected function setUp() : void
    {
        $this->bootKernel(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class);
        $this->fileHashComputer = self::$container->get(\Symplify\EasyCodingStandard\ChangedFilesDetector\FileHashComputer::class);
        $this->smartFileSystem = self::$container->get(\Symplify\SmartFileSystem\SmartFileSystem::class);
        $this->yamlToPhpConverter = self::$container->get(\_PhpScoper83a475a0590e\Migrify\PhpConfigPrinter\YamlToPhpConverter::class);
    }
    public function testInvalidateCacheOnConfigurationChange() : void
    {
        // A. create on another one with fixer
        $this->dumpServicesToPhpConfigFile([\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class => []]);
        $fileOneHash = $this->fileHashComputer->computeConfig(__DIR__ . '/FileHashComputerSource/config-including-another-one.php');
        // B. create on another one with no fixer
        $this->dumpServicesToPhpConfigFile([]);
        $fileTwoHash = $this->fileHashComputer->computeConfig(__DIR__ . '/FileHashComputerSource/config-including-another-one.php');
        $this->assertNotSame($fileOneHash, $fileTwoHash);
        $this->smartFileSystem->remove(self::INCLUDED_CONFIG_FILE);
    }
    public function testPhpFileHash() : void
    {
        $fileOne = __DIR__ . '/FileHashComputerSource/SomeScannedClass.php';
        $fileOneHash = $this->fileHashComputer->compute($fileOne);
        $expectedFileOneHasn = \md5_file($fileOne);
        $this->assertSame($expectedFileOneHasn, $fileOneHash);
        $fileTwo = __DIR__ . '/FileHashComputerSource/ChangedScannedClass.php';
        $fileTwoHash = $this->fileHashComputer->compute($fileTwo);
        $expectedFileTwoHash = \md5_file($fileTwo);
        $this->assertSame($expectedFileTwoHash, $fileTwoHash);
        $this->assertNotSame($fileOneHash, $fileTwoHash);
    }
    /**
     * @param mixed[] $services
     */
    private function dumpServicesToPhpConfigFile(array $services) : void
    {
        $yamlFileContent = $this->yamlToPhpConverter->convertYamlArray(['services' => $services]);
        $this->smartFileSystem->dumpFile(self::INCLUDED_CONFIG_FILE, $yamlFileContent);
    }
}
