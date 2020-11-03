<?php

declare (strict_types=1);
namespace _PhpScoper2b44cb0c30af;

use PhpCsFixer\Tokenizer\Analyzer\FunctionsAnalyzer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ChangedFilesDetector\ChangedFilesDetector;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\CodingStandard\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/TokenRunner/ValueObject', __DIR__ . '/../src/TokenRunner/Exception', __DIR__ . '/../src/Sniffs', __DIR__ . '/../src/Fixer', __DIR__ . '/../src/Rules', __DIR__ . '/../src/PHPStan']);
    $services->set(\PhpCsFixer\Tokenizer\Analyzer\FunctionsAnalyzer::class);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
    $services->set(\Symplify\EasyCodingStandard\ChangedFilesDetector\ChangedFilesDetector::class);
};
